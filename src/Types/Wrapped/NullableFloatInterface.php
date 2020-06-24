<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `nullable float` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableFloatInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `nullable float` from another wrapped `nullable float`.
	 * @param NullableFloatInterface $value The wrapped `nullable float` to base the new wrapped `nullable float` on.
	 * @return NullableFloatInterface The new wrapped `nullable float`.
	 */
	public static function fromNullableFloat( NullableFloatInterface $value ): NullableFloatInterface;

	/**
	 * Gets the value of the wrapped `nullable float`.
	 * @return null|float The value of the wrapped `nullable float`.
	 */
	public function getValue(): ?float;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `nullable float` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
