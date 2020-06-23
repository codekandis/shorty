<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `nullable array` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableArrayInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `nullable array` from another wrapped `nullable array`.
	 * @param NullableArrayInterface $value The wrapped `nullable array` to base the new wrapped `nullable array` on.
	 * @return NullableArrayInterface The new wrapped `nullable array`.
	 */
	public static function fromNullableArray( NullableArrayInterface $value ): NullableArrayInterface;

	/**
	 * Gets the value of the wrapped `nullable array`.
	 * @return null|array The value of the wrapped `nullable array`.
	 */
	public function getValue(): ?array;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `nullable array` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
