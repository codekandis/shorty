<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all stream modes.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StreamModeInterface extends StringInterface
{
	/**
	 * Creates a wrapped stream mode from another wrapped stream mode.
	 * @param StreamModeInterface $value The wrapped stream mode to base the new wrapped stream mode on.
	 * @return StreamModeInterface The new wrapped stream mode.
	 */
	public static function fromStreamMode( StreamModeInterface $value ): StreamModeInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped stream mode.
	 * @return string The value of the wrapped stream mode.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped stream mode into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
