<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `nullable bool` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface  NullableBoolInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `nullable bool` from another wrapped `nullable bool`.
	 * @param NullableBoolInterface $value The wrapped `nullable bool` to base the new wrapped `nullable bool` on.
	 * @return NullableBoolInterface The new wrapped `nullable bool`.
	 */
	public static function fromNullableBool( self $value ): self;

	/**
	 * Gets the value of the wrapped `nullable bool`.
	 * @return null|bool The value of the wrapped `nullable bool`.
	 */
	public function getValue(): ?bool;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `nullable bool` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
