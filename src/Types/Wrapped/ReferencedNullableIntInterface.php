<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `nullable int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedNullableIntInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `nullable int` from another wrapped referenced `nullable int`.
	 * @param ReferencedNullableIntInterface $value The wrapped referenced `nullable int` to base the new wrapped referenced `nullable int` on.
	 * @return ReferencedNullableIntInterface The new wrapped referenced `nullable int`.
	 */
	public static function fromReferencedNullableInt( ReferencedNullableIntInterface $value ): ReferencedNullableIntInterface;

	/**
	 * Gets the value of the wrapped referenced `nullable int`.
	 * @return null|int The value of the wrapped referenced `nullable int`.
	 */
	public function &getValue(): ?int;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `nullable int` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
