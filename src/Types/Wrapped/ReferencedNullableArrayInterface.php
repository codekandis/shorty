<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `nullable array` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedNullableArrayInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `nullable array` from another wrapped referenced `nullable array`.
	 * @param ReferencedNullableArrayInterface $value The wrapped referenced `nullable array` to base the new wrapped referenced `nullable array` on.
	 * @return ReferencedNullableArrayInterface The new wrapped referenced `nullable array`.
	 */
	public static function fromReferencedNullableArray( ReferencedNullableArrayInterface $value ): ReferencedNullableArrayInterface;

	/**
	 * Gets the value of the wrapped referenced `nullable array`.
	 * @return null|array The value of the wrapped referenced `nullable array`.
	 */
	public function &getValue(): ?array;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `nullable array` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
