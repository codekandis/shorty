<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `nullable float` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedNullableFloatInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `nullable float` from another wrapped referenced `nullable float`.
	 * @param ReferencedNullableFloatInterface $value The wrapped referenced `nullable float` to base the new wrapped referenced `nullable float` on.
	 * @return ReferencedNullableFloatInterface The new wrapped referenced `nullable float`.
	 */
	public static function fromReferencedNullableFloat( ReferencedNullableFloatInterface $value ): ReferencedNullableFloatInterface;

	/**
	 * Gets the value of the wrapped referenced `nullable float`.
	 * @return null|float The value of the wrapped referenced `nullable float`.
	 */
	public function &getValue(): ?float;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `nullable float` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
