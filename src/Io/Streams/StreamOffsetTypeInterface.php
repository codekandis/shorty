<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Types\Wrapped\IntInterface;

/**
 * Represents the interface of all stream offset types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StreamOffsetTypeInterface extends IntInterface
{
	/**
	 * Creates a wrapped stream offset type from another wrapped stream offset type.
	 * @param StreamOffsetTypeInterface $value The wrapped stream offset type to base the new wrapped stream offset type on.
	 * @return StreamOffsetTypeInterface The new wrapped stream offset type.
	 */
	public static function fromStreamOffsetType( StreamOffsetTypeInterface $value ): StreamOffsetTypeInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped stream offset type.
	 * @return int The value of the wrapped stream offset type.
	 */
	public function getValue(): int;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped stream offset type into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
