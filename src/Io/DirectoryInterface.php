<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

/**
 * Represents the interface of all file system directory entries.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DirectoryInterface extends FileSystemEntryInterface
{
	/**
	 * Gets the list of file system entries the directory contains.
	 * @return FileSystemEntryInterface[] The list of file system entries the directory contains.
	 * @throws DirectoryNotFoundException The directory does not exist.
	 * @throws DirectoryIsNotReadableException The directory is not readable.
	 */
	public function fetchFileSystemEntries(): iterable;

	/**
	 * Gets the list of files the directory contains.
	 * @return FileInterface[] The list of files the directory contains.
	 * @throws DirectoryNotFoundException The directory does not exist.
	 * @throws DirectoryIsNotReadableException The directory is not readable.
	 */
	public function fetchFiles(): iterable;

	/**
	 * Gets the list of sub directories the directory contains.
	 * @return DirectoryInterface[] The list of sub directories the directory contains.
	 * @throws DirectoryNotFoundException The directory does not exist.
	 * @throws DirectoryIsNotReadableException The directory is not readable.
	 */
	public function fetchDirectories(): iterable;

	/**
	 * Deletes the directory.
	 * @throws DirectoryNotFoundException The directory does not exist.
	 * @throws DirectoryIsNotReadableException The directory is not readable.
	 * @throws DirectoryIsNotWritableException The directory is not writable.
	 * @throws DirectoryIsNotDeletableException The directory is not deletable.
	 * @throws FileNotFoundException A file in the directory does not exist.
	 * @throws FileIsNotWritableException A file in the directory is not writable.
	 * @throws FileIsNotDeletableException A file in the directory is not deletable.
	 */
	public function delete(): void;

	/**
	 * Gets the size of the directory.
	 * @return int The size of the directory.
	 * @throws DirectoryNotFoundException The directory does not exist.
	 * @throws DirectoryIsNotReadableException The directory is not readable.
	 * @throws FileNotFoundException A file in the directory does not exist.
	 * @throws FileIsNotReadableException A file in the directory is not readable.
	 */
	public function getSize(): int;
}
