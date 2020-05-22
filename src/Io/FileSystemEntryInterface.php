<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

use DateTime;

/**
 * Represents the interface of all file system entries.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FileSystemEntryInterface
{
	/**
	 * Gets the path of the file system entry.
	 * @return PathInterface The path of the file system entry.
	 */
	public function getPath(): PathInterface;

	/**
	 * Gets the name of the file system entry.
	 * @return string The name of the file system entry.
	 */
	public function getName(): string;

	/**
	 * Determines if the file system entry exists in the file system.
	 * @return bool `true` if the file system entry exists in the file system, `false` otherwise.
	 */
	public function exists(): bool;

	/**
	 * Determines if the file system entry is a file.
	 * @return bool `true` if the file system entry is a file, `false` otherwise.
	 */
	public function isFile(): bool;

	/**
	 * Determines if the file system entry is a directory.
	 * @return bool `true` if the file system entry is a directory, `false` otherwise.
	 */
	public function isDirectory(): bool;

	/**
	 * Determines if the file system entry is readable.
	 * @return bool `true` if the file system entry is readable, `false` otherwise.
	 */
	public function isReadable(): bool;

	/**
	 * Determines if the file system entry is writable.
	 * @return bool `true` if the file system entry is writable, `false` otherwise.
	 */
	public function isWritable(): bool;

	/**
	 * Gets the creation time of the file system entry.
	 * @return DateTime The creation time of the file system entry.
	 * @throws FileSystemEntryNotFoundException The file system entry does not exist.
	 */
	public function getCreationTime(): DateTime;

	/**
	 * Gets the creation time of the file system entry.
	 * @return DateTime The creation time of the file system entry.
	 * @throws FileSystemEntryNotFoundException The file system entry does not exist.
	 */
	public function getModificationTime(): DateTime;

	/**
	 * Gets the creation time of the file system entry.
	 * @return DateTime The creation time of the file system entry.
	 * @throws FileSystemEntryNotFoundException The file system entry does not exist.
	 */
	public function getLastAccessTime(): DateTime;
}
