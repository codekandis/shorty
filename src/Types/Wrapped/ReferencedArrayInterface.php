<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `array` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedArrayInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `array` from another wrapped referenced `array`.
	 * @param ReferencedArrayInterface $value The wrapped referenced `array` to base the new wrapped referenced `array` on.
	 * @return ReferencedArrayInterface The new wrapped referenced `array`.
	 */
	public static function fromReferencedArray( ReferencedArrayInterface $value ): ReferencedArrayInterface;

	/**
	 * Gets the value of the wrapped referenced `array`.
	 * @return array The value of the wrapped referenced `array`.
	 */
	public function &getValue(): array;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `array` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
