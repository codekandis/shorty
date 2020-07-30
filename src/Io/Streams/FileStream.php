<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Io\FileInterface;
use function sprintf;
use function strpos;

/**
 * Represents a file stream.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class FileStream extends Stream implements FileStreamInterface
{
	/**
	 * Represents the error message if the underlying file URI is not a file scheme URI.
	 * @var string
	 */
	private const ERROR_UNDERLYING_FILE_URI_IS_NOT_A_FILE_SCHEME_URI = 'The underlying file URI `%s` is not a file scheme URI.';

	/**
	 * Stores the underlying file of the stream.
	 * @var FileInterface
	 */
	private FileInterface $file;

	/**
	 * Constructor method.
	 * @param FileInterface $file The underlying file of the stream.
	 * @param StreamModeInterface $mode The mode of the stream.
	 */
	public function __construct( FileInterface $file, StreamModeInterface $mode )
	{
		$this->file = $file;

		parent::__construct(
			new Uri( $this->file->getPath()->getValue() ),
			$mode
		);
	}

	/**
	 * Gets the URI of the underlying file.
	 * @return UriInterface The URI of the underlying file.
	 */
	private function getUri(): UriInterface
	{
		$filePath = $this->file->getPath()->getValue();
		if ( 0 !== strpos( $filePath, UriScheme::FILE . '://' ) )
		{
			throw new UriIsInvalidException(
				sprintf(
					self::ERROR_UNDERLYING_FILE_URI_IS_NOT_A_FILE_SCHEME_URI,
					$filePath
				)
			);
		}

		return new Uri( $filePath );
	}

	/**
	 * @inheritDoc
	 */
	public function getFile(): FileInterface
	{
		return $this->file;
	}
}
