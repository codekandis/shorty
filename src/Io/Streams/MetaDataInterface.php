<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Types\Wrapped\ArrayInterface;

/**
 * Represents the meta data of a stream.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface MetaDataInterface extends ArrayInterface
{
	/**
	 * Creates a wrapped stream meta data from another wrapped stream meta data.
	 * @param MetaDataInterface $value The wrapped stream meta data to base the new wrapped stream meta data on.
	 * @return MetaDataInterface The new wrapped stream meta data.
	 */
	public static function fromMetaData( MetaDataInterface $value ): MetaDataInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped stream meta data.
	 * @return array The value of the wrapped stream meta data.
	 */
	public function getValue(): array;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped stream meta data into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;

	/**
	 * Determines if the stream timed out on the last call of `fread()` or `fwrite()`.
	 * @return bool `true` if the stream timed out, `false` otherwise.
	 */
	public function isTimedOut(): bool;

	/**
	 * Determines if the stream is in blocking IO mode.
	 * @return bool `true` if the stream is in blocking IO mode, `false` otherwise.
	 */
	public function isBlocked(): bool;

	/**
	 * Determines if the end of the stream has been reached.
	 * @return bool `true` if the end of the stream has been reached, `false` otherwise.
	 */
	public function isEndOfFile(): bool;

	/**
	 * Gets the number of bytes currently contained in the PHP's own internal buffer.
	 * @return int The number of bytes currently contained in the PHP's own internal buffer.
	 */
	public function getUnreadBytes(): int;

	/**
	 * Gets the label describing the underlying implementation of the stream.
	 * @return string The label describing the underlying implementation of the stream.
	 */
	public function getStreamType(): string;

	/**
	 * Gets the label describing the protocol wrapper implementation layered over the stream.
	 * @return string The label describing the protocol wrapper implementation layered over the stream.
	 */
	public function getWrapperType(): string;

	/**
	 * Gets the wrapper specific data attached to this stream.
	 * @return mixed The wrapper specific data attached to this stream.
	 */
	public function getWrapperData();

	/**
	 * Gets the mode of how to access the stream.
	 * @return StreamModeInterface The mode of how to access the stream.
	 */
	public function getMode(): StreamModeInterface;

	/**
	 * Determines if the current stream can be seeked.
	 * @return bool `true` if the current stream can be seeked, `false` otherwise.
	 */
	public function isSeekable(): bool;

	/**
	 * Gets the URI associated with the stream.
	 * @return UriInterface The URI associated with the stream.
	 */
	public function getUri(): UriInterface;
}
