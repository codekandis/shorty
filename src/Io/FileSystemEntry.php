<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

use CodeKandis\Shorty\AbstractObject;
use DateTime;
use DateTimeZone;
use function date_default_timezone_get;
use function file_exists;
use function filemtime;
use function is_dir;
use function is_file;
use function is_readable;
use function is_writable;
use function sprintf;

/**
 * Represents a file system entry.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class FileSystemEntry extends AbstractObject implements FileSystemEntryInterface
{
	/**
	 * Represents the error message if the file does not exist.
	 * @var string
	 */
	protected const ERROR_FILE_SYSTEM_ENTRY_DOES_NOT_EXIST = 'The file system entry \'%s\' does not exist.';

	/**
	 * Stores the path of the file system entry.
	 * @var PathInterface
	 */
	private PathInterface $path;

	/**
	 * Constructor method.
	 * @param PathInterface The path of the file system entry.
	 */
	public function __construct( PathInterface $path )
	{
		$this->path = $path;
	}

	/**
	 * @inheritDoc
	 */
	public function getPath(): PathInterface
	{
		return $this->path;
	}

	/**
	 * @inheritDoc
	 */
	public function getName(): string
	{
		return $this->path->getBaseName();
	}

	/**
	 * @inheritDoc
	 */
	public function exists(): bool
	{
		return file_exists( $this->path->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function isFile(): bool
	{
		return is_file( $this->path->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function isDirectory(): bool
	{
		return is_dir( $this->path->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function isReadable(): bool
	{
		return is_readable( $this->path->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function isWritable(): bool
	{
		return is_writable( $this->path->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getCreationTime(): DateTime
	{
		if ( false === $this->exists() )
		{
			throw new FileSystemEntryNotFoundException(
				sprintf(
					static::ERROR_FILE_SYSTEM_ENTRY_DOES_NOT_EXIST,
					$this->getPath()->getValue()
				)
			);
		}

		return DateTime::createFromFormat(
			'U',
			fileatime( $this->getPath()->getValue() ),
			new DateTimeZone(
				date_default_timezone_get()
			)
		);
	}

	/**
	 * @inheritDoc
	 */
	public function getModificationTime(): DateTime
	{
		if ( false === $this->exists() )
		{
			throw new FileSystemEntryNotFoundException(
				sprintf(
					static::ERROR_FILE_SYSTEM_ENTRY_DOES_NOT_EXIST,
					$this->getPath()->getValue()
				)
			);
		}

		return DateTime::createFromFormat(
			'U',
			filemtime( $this->getPath()->getValue() ),
			new DateTimeZone(
				date_default_timezone_get()
			)
		);
	}

	/**
	 * @inheritDoc
	 */
	public function getLastAccessTime(): DateTime
	{
		if ( false === $this->exists() )
		{
			throw new FileSystemEntryNotFoundException(
				sprintf(
					static::ERROR_FILE_SYSTEM_ENTRY_DOES_NOT_EXIST,
					$this->getPath()->getValue()
				)
			);
		}

		return DateTime::createFromFormat(
			'U',
			fileatime( $this->getPath()->getValue() ),
			new DateTimeZone(
				date_default_timezone_get()
			)
		);
	}
}
