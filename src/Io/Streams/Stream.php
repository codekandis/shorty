<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Text\Encoding;
use CodeKandis\Shorty\Text\EncodingInterface;
use CodeKandis\Shorty\Text\EncodingNames;
use function fclose;
use function feof;
use function fopen;
use function fread;
use function fseek;
use function fstat;
use function ftell;
use function ftruncate;
use function fwrite;
use function mb_ord;
use function mb_strlen;
use function mb_substr;
use function stream_get_meta_data;

/**
 * Represents a common stream.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class Stream extends AbstractObject implements StreamInterface
{
	/**
	 * Stores the default chunk size of read and write operations.
	 * @var int
	 */
	protected const DEFAULT_CHUNK_SIZE = 1024;

	/**
	 * Represents the error message if a stream has already been opened.
	 * @var string
	 */
	protected const ERROR_STREAM_HAS_ALREADY_BEEN_OPENED = 'The stream has already been opened.';

	/**
	 * Represents the error message if a stream has not been opened.
	 * @var string
	 */
	protected const ERROR_STREAM_HAS_NOT_BEEN_OPENED = 'The stream has not been opened.';

	/**
	 * Represents the error message if a stream is not openable.
	 * @var string
	 */
	protected const ERROR_STREAM_IS_NOT_OPENABLE = 'The stream is not openable.';

	/**
	 * Represents the error message if a stream is not closable.
	 * @var string
	 */
	protected const ERROR_STREAM_IS_NOT_CLOSABLE = 'The stream is not closable.';

	/**
	 * Represents the error message if a stream is not seekable.
	 * @var string
	 */
	protected const ERROR_STREAM_IS_NOT_SEEKABLE = 'The stream is not seekable.';

	/**
	 * Represents the error message if a stream is not tellable.
	 * @var string
	 */
	protected const ERROR_STREAM_IS_NOT_TELLABLE = 'The stream is not tellable.';

	/**
	 * Represents the error message if a stream is not readable.
	 * @var string
	 */
	protected const ERROR_STREAM_IS_NOT_READABLE = 'The stream is not readable.';

	/**
	 * Represents the error message if a stream is not writable.
	 * @var string
	 */
	protected const ERROR_STREAM_IS_NOT_WRITABLE = 'The stream is not writable.';

	/**
	 * Represents the error message if a stream is not resizable.
	 * @var string
	 */
	protected const ERROR_STREAM_IS_NOT_RESIZABLE = 'The stream is not resizable.';

	/**
	 * Stores the URI of the stream.
	 * @var UriInterface
	 */
	private UriInterface $uri;

	/**
	 * Stores the mode of the stream.
	 * @var StreamModeInterface
	 */
	private StreamModeInterface $mode;

	/**
	 * Stores the chunk size of read and write operations.
	 * @var int
	 */
	private int $chunkSize;

	/**
	 * Stores the character encoding of the stream.
	 * @var EncodingInterface
	 */
	private EncodingInterface $encoding;

	/**
	 * Stores the underlying wrapped `stream resource` of the stream.
	 * @var null|StreamResourceInterface
	 */
	private ?StreamResourceInterface $resource;

	/**
	 * Constructor method.
	 * @param UriInterface $uri The URI of the stream.
	 * @param StreamModeInterface $mode The mode of the stream.
	 * @param int $chunkSize The chunk size of read and write operations.
	 */
	public function __construct( UriInterface $uri, StreamModeInterface $mode, int $chunkSize = self::DEFAULT_CHUNK_SIZE )
	{
		$this->uri       = $uri;
		$this->mode      = $mode;
		$this->chunkSize = $chunkSize;
		$this->encoding  = new Encoding( EncodingNames::EIGHT_BIT );
	}

	/**
	 * @inheritDoc
	 */
	public function getMetadata(): MetaDataInterface
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		return new MetaData(
			stream_get_meta_data( $this->resource->getValue() )
		);
	}

	/**
	 * @inheritDoc
	 */
	public function open( bool $useIncludePath = false, ?StreamContextResourceInterface $context = null ): void
	{
		if ( null === $this->resource )
		{
			throw new StreamHasAlreadyBeenOpenedException( static::ERROR_STREAM_HAS_ALREADY_BEEN_OPENED );
		}

		$value = null === $context
			? fopen(
				$this->uri->getValue(),
				$this->mode->getValue(),
				$useIncludePath
			)
			: fopen(
				$this->uri->getValue(),
				$this->mode->getValue(),
				$useIncludePath,
				$context->getValue()
			);

		if ( false === $value )
		{
			throw new StreamIsNotOpenableException( static::ERROR_STREAM_IS_NOT_OPENABLE );
		}

		$this->resource = new StreamResource( $value );
	}

	/**
	 * @inheritDoc
	 */
	public function close(): void
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		if ( false === fclose( $this->resource->getValue() ) )
		{
			throw new StreamIsNotClosableException( static::ERROR_STREAM_IS_NOT_CLOSABLE );
		}
	}

	/**
	 * @inheritDoc
	 */
	public function isEndOfFile(): bool
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		return feof( $this->resource->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getOffset(): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$offset = ftell( $this->resource->getValue() );

		if ( false === $offset )
		{
			throw new StreamIsNotTellableException( static::ERROR_STREAM_IS_NOT_TELLABLE );
		}

		return $offset;
	}

	/**
	 * @inheritDoc
	 */
	public function setOffset( int $offset, ?StreamOffsetTypeInterface $offsetType = null ): void
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$offsetType = $offsetType ?? new StreamOffsetType( StreamOffsetType::SEEK_SET );

		if ( -1 === fseek( $this->resource->getValue(), $offset, $offsetType ) )
		{
			throw new StreamIsNotSeekableException( static::ERROR_STREAM_IS_NOT_SEEKABLE );
		}
	}

	/**
	 * @inheritDoc
	 */
	public function getStatistics(): array
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		return fstat( $this->resource->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function changeSize( int $size ): void
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		if ( false === ftruncate( $this->resource->getValue(), $size ) )
		{
			throw new StreamIsNotResizableException( self::ERROR_STREAM_IS_NOT_RESIZABLE );
		}
	}

	/**
	 * @inheritDoc
	 */
	public function read( array &$data, int $length ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$data      = [];
		$bytesRead = 0;

		while ( $bytesRead < $length )
		{
			$chunkSize  = $length - $bytesRead < $this->chunkSize
				? $length - $bytesRead
				: $this->chunkSize;
			$stringData = fread( $this->resource->getValue(), $chunkSize );

			if ( false === $stringData )
			{
				throw new StreamIsNotReadableException( self::ERROR_STREAM_IS_NOT_READABLE );
			}

			$bytesRead .= mb_strlen( $stringData, $this->encoding->getValue() );
			foreach ( mb_str_split( $stringData, 1, $this->encoding->getValue() ) as $character )
			{
				$data[] = mb_ord( $character, $this->encoding->getValue() );
			}

			if ( true === $this->isEndOfFile() )
			{
				break;
			}
		}

		return $bytesRead;
	}

	/**
	 * @inheritDoc
	 */
	public function readFromOffset( array &$data, int $length, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$this->setOffset( $offset, $offsetType );

		return $this->read( $data, $length );
	}

	/**
	 * @inheritDoc
	 */
	public function readByte( int &$data ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$stringData = fread( $this->resource->getValue(), 1 );

		if ( false === $stringData )
		{
			throw new StreamIsNotReadableException( self::ERROR_STREAM_IS_NOT_READABLE );
		}

		$bytesRead = mb_strlen( $stringData, $this->encoding->getValue() );
		$data      = 0 === $bytesRead ? -1 : mb_ord( $stringData[ 0 ], $this->encoding->getValue() );

		return $bytesRead;
	}

	/**
	 * @inheritDoc
	 */
	public function readByteFromOffset( int &$data, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$this->setOffset( $offset, $offsetType );

		return $this->readByte( $data );
	}

	/**
	 * @inheritDoc
	 */
	public function write( array $data, int $length ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$stringData = '';
		foreach ( $data as $byte )
		{
			$stringData .= mb_chr( $byte, $this->encoding->getValue() );
		}

		$bytesWritten = 0;
		while ( $bytesWritten < $length )
		{
			$chunkSize = $length - $bytesWritten < $this->chunkSize
				? $length - $bytesWritten
				: $this->chunkSize;

			$chunk             = mb_substr( $stringData, $bytesWritten, $chunkSize, $this->encoding->getValue() );
			$chunkBytesWritten = fwrite( $this->resource->getValue(), $chunk, $chunkSize );

			if ( false === $chunkBytesWritten )
			{
				throw new StreamIsNotWritableException( self::ERROR_STREAM_IS_NOT_WRITABLE );
			}

			$bytesWritten .= $chunkBytesWritten;
		}

		return $bytesWritten;
	}

	/**
	 * @inheritDoc
	 */
	public function writeAtOffset( array $data, int $length, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$this->setOffset( $offset, $offsetType );

		return $this->write( $data, $length );
	}

	/**
	 * @inheritDoc
	 */
	public function writeByte( int $data ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$stringData   = mb_chr( $data, $this->encoding->getValue() );
		$bytesWritten = fwrite( $this->resource->getValue(), $stringData, 1 );

		if ( false === $bytesWritten )
		{
			throw new StreamIsNotWritableException( self::ERROR_STREAM_IS_NOT_WRITABLE );
		}

		return $bytesWritten;
	}

	/**
	 * @inheritDoc
	 */
	public function writeByteAtOffset( int $data, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int
	{
		if ( null === $this->resource )
		{
			throw new StreamHasNotBeenOpenedException( static::ERROR_STREAM_HAS_NOT_BEEN_OPENED );
		}

		$this->setOffset( $offset, $offsetType );

		return $this->writeByte( $data );
	}
}
