<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

use function filesize;
use function mime_content_type;
use function sprintf;
use function unlink;

/**
 * Represents a file system file entry
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class File extends FileSystemEntry implements FileInterface
{
	/**
	 * Represents the error message if the file does not exist.
	 * @var string
	 */
	protected const ERROR_FILE_DOES_NOT_EXIST = 'The file \'%s\' does not exist.';

	/**
	 * Represents the error message if the file is not readable.
	 * @var string
	 */
	protected const ERROR_FILE_IS_NOT_READABLE = 'The file \'%s\' is not readable.';

	/**
	 * Represents the error message if the file is not writable.
	 * @var string
	 */
	protected const ERROR_FILE_IS_NOT_WRITABLE = 'The file \'%s\' is not writable.';

	/**
	 * Represents the error message if the file is not deletable.
	 * @var string
	 */
	protected const ERROR_FILE_IS_NOT_DELETABLE = 'The file \'%s\' is not deletable.';

	/**
	 * @inheritDoc
	 */
	public function exists(): bool
	{
		return parent::exists() && $this->isFile();
	}

	/**
	 * @inheritDoc
	 */
	public function delete(): void
	{
		if ( false === $this->exists() )
		{
			throw new FileNotFoundException(
				sprintf(
					static::ERROR_FILE_DOES_NOT_EXIST,
					$this->getPath()->getValue()
				)
			);
		}
		if ( false === $this->isWritable() )
		{
			throw new FileIsNotWritableException(
				sprintf(
					static::ERROR_FILE_IS_NOT_WRITABLE,
					$this->getPath()->getValue()
				)
			);
		}
		if ( false === unlink( $this->getPath()->getValue() ) )
		{
			throw new FileIsNotDeletableException(
				sprintf(
					static::ERROR_FILE_IS_NOT_DELETABLE,
					$this->getPath()->getValue()
				)
			);
		}
	}

	/**
	 * @inheritDoc
	 */
	public function getSize(): int
	{
		if ( false === $this->exists() )
		{
			throw new FileNotFoundException(
				sprintf(
					static::ERROR_FILE_DOES_NOT_EXIST,
					$this->getPath()->getValue()
				)
			);
		}
		if ( false === $this->isReadable() )
		{
			throw new FileIsNotReadableException(
				sprintf(
					static::ERROR_FILE_IS_NOT_READABLE,
					$this->getPath()->getValue()
				)
			);
		}

		return filesize( $this->getPath()->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getMimeType(): string
	{
		return mime_content_type( $this->getPath()->getValue() );
	}
}
