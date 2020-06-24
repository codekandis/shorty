<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `nullable int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `nullable int` from another wrapped `nullable int`.
	 * @param NullableIntInterface $value The wrapped `nullable int` to base the new wrapped `nullable int` on.
	 * @return NullableIntInterface The new wrapped `nullable int`.
	 */
	public static function fromNullableInt( NullableIntInterface $value ): NullableIntInterface;

	/**
	 * Gets the value of the wrapped `nullable int`.
	 * @return null|int The value of the wrapped `nullable int`.
	 */
	public function getValue(): ?int;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `nullable int` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
