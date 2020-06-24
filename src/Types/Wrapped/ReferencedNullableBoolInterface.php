<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `nullable bool` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedNullableBoolInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `nullable bool` from another wrapped referenced `nullable bool`.
	 * @param ReferencedNullableBoolInterface $value The wrapped referenced `nullable bool` to base the new wrapped referenced `nullable bool` on.
	 * @return ReferencedNullableBoolInterface The new wrapped referenced `nullable bool`.
	 */
	public static function fromReferencedNullableBool( ReferencedNullableBoolInterface $value ): ReferencedNullableBoolInterface;

	/**
	 * Gets the value of the wrapped referenced `nullable bool`.
	 * @return null|bool The value of the wrapped referenced `nullable bool`.
	 */
	public function &getValue(): ?bool;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `nullable bool` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
