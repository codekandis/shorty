<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

/**
 * Represents the interface of all file system file entries.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FileInterface extends FileSystemEntryInterface
{
	/**
	 * Deletes the file.
	 * @throws FileNotFoundException The file does not exist.
	 * @throws FileIsNotWritableException The file is not writable.
	 * @throws FileIsNotDeletableException The file is not deletable.
	 */
	public function delete(): void;

	/**
	 * Gets the size of the file.
	 * @return int The size of the file.
	 * @throws FileNotFoundException The file does not exist.
	 * @throws FileIsNotReadableException The file is not readable.
	 */
	public function getSize(): int;

	/**
	 * Gets the mime type of the file.
	 * @return string The mime type of the file.
	 */
	public function getMimeType(): string;
}
