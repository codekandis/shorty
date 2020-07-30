<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

/**
 * Represents the interface of all streams.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StreamInterface
{
	/**
	 * Gets the metadata of the stream.
	 * @return MetaDataInterface The metadata of the stream.
	 */
	public function getMetadata(): MetaDataInterface;

	/**
	 * Opens the stream.
	 * @param bool $useIncludePath `true` if the include path should be used, `false` otherwise.
	 * @param null|StreamContextResourceInterface $streamContextResource The context resource of the stream.
	 * @throws StreamHasAlreadyBeenOpenedException The stream has already been opened.
	 * @throws StreamIsNotOpenableException The stream cannot be opened.
	 */
	public function open( bool $useIncludePath = false, ?StreamContextResourceInterface $streamContextResource = null ): void;

	/**
	 * Closes the stream.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotClosableException The stream cannot be closed.
	 */
	public function close(): void;

	/**
	 * Determines if the stream reached the end of file.
	 * @return bool `true` if the stream reached the end of file, `false` otherwise.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 */
	public function isEndOfFile(): bool;

	/**
	 * Gets the current offset of the stream pointer.
	 * @return int The current position of the stream pointer.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotTellableException The stream is not tellable.
	 */
	public function getOffset(): int;

	/**
	 * Sets the stream pointer offset.
	 * @param int $offset The offset to set the stream pointer to.
	 * @param null|StreamOffsetTypeInterface $offsetType Specifies whence the final stream pointer offset must be calculated.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotSeekableException The stream is not seekable.
	 */
	public function setOffset( int $offset, ?StreamOffsetTypeInterface $offsetType = null ): void;

	/**
	 * Gets the statistics of the stream.
	 * @return array The statistics of the stream.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 */
	public function getStatistics(): array;

	/**
	 * Changes the size of the stream.
	 * @param int $size The new size of the stream.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotResizableException The stream is not resizable.
	 */
	public function changeSize( int $size ): void;

	/**
	 * Reads data from the stream.
	 * @param array $data The referenced data to read the data into.
	 * @param int $length The number of bytes to read.
	 * @return int The number of bytes read from the stream.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotReadableException The stream is not readable.
	 */
	public function read( array &$data, int $length ): int;

	/**
	 * Reads data from the stream at a specified offset.
	 * @param array $data The referenced data to read the data into.
	 * @param int $length The number of bytes to read.
	 * @param int $offset The offset from where to start reading.
	 * @param null|StreamOffsetTypeInterface $offsetType Specifies whence the final stream pointer offset must be calculated. If omitted the default offset type will be used.
	 * @return int The number of bytes read from the stream.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotSeekableException The stream is not seekable.
	 * @throws StreamIsNotReadableException The stream is not readable.
	 */
	public function readFromOffset( array &$data, int $length, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int;

	/**
	 * Reads a single byte data from the stream.
	 * @param int $data The referenced data to read the data into.
	 * @return int The number of bytes read from the stream.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotReadableException The stream is not readable.
	 */
	public function readByte( int &$data ): int;

	/**
	 * Reads a single byte data from the stream at a specified offset.
	 * @param int $data The referenced data to read the data into.
	 * @param int $offset The offset from where to start reading.
	 * @param null|StreamOffsetTypeInterface $offsetType Specifies whence the final stream pointer offset must be calculated. If omitted the default offset type will be used.
	 * @return int The number of bytes read from the stream.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotSeekableException The stream is not seekable.
	 * @throws StreamIsNotReadableException The stream is not readable.
	 */
	public function readByteFromOffset( int &$data, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int;

	/**
	 * Writes data into the stream.
	 * @param array $data The data to write into the stream.
	 * @param int $length The number of bytes to write.
	 * @return int The number of bytes that has been written.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotWritableException The stream is not writable.
	 */
	public function write( array $data, int $length ): int;

	/**
	 * Writes data into the stream at a specified offset.
	 * @param array $data The data to write into the stream.
	 * @param int $length The number of bytes to write.
	 * @param int $offset The offset from where to start writing.
	 * @param null|StreamOffsetTypeInterface $offsetType Specifies whence the final stream pointer offset must be calculated. If omitted the default offset type will be used.
	 * @return int The number of bytes that has been written.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotSeekableException The stream is not seekable.
	 * @throws StreamIsNotWritableException The stream is not writable.
	 */
	public function writeAtOffset( array $data, int $length, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int;

	/**
	 * Writes a single byte data into the stream.
	 * @param int $data The data to write into the stream.
	 * @return int The number of bytes that has been written.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotWritableException The stream is not writable.
	 */
	public function writeByte( int $data ): int;

	/**
	 * Writes a single byte data into the stream at a specified offset.
	 * @param int $data The data to write into the stream.
	 * @param int $offset The offset from where to start writing.
	 * @param null|StreamOffsetTypeInterface $offsetType Specifies whence the final stream pointer offset must be calculated. If omitted the default offset type will be used.
	 * @return int The number of bytes that has been written.
	 * @throws StreamHasNotBeenOpenedException The stream has not been opened.
	 * @throws StreamIsNotSeekableException The stream is not seekable.
	 * @throws StreamIsNotWritableException The stream is not writable.
	 */
	public function writeByteAtOffset( int $data, int $offset, ?StreamOffsetTypeInterface $offsetType = null ): int;
}
