<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `nullable string` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedNullableStringInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `nullable string` from another wrapped referenced `nullable string`.
	 * @param ReferencedNullableStringInterface $value The wrapped referenced `nullable string` to base the new referenced `nullable string` on.
	 * @return ReferencedNullableStringInterface The new wrapped referenced `nullable string`.
	 */
	public static function fromReferencedNullableString( ReferencedNullableStringInterface $value ): ReferencedNullableStringInterface;

	/**
	 * Gets the value of the wrapped referenced `nullable string`.
	 * @return null|string The value of the wrapped referenced `nullable string`.
	 */
	public function &getValue(): ?string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `nullable string` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
