<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `nullable string` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableStringInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `nullable string` from another wrapped `nullable string`.
	 * @param NullableStringInterface $value The wrapped `nullable string` to base the new wrapped `nullable string` on.
	 * @return NullableStringInterface The new wrapped `nullable string`.
	 */
	public static function fromNullableString( NullableStringInterface $value ): NullableStringInterface;

	/**
	 * Gets the value of the wrapped `nullable string`.
	 * @return null|string The value of the wrapped `nullable string`.
	 */
	public function getValue(): ?string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `nullable string` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
