<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `bool` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedBoolInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `bool` from another wrapped referenced `bool`.
	 * @param ReferencedBoolInterface $value The wrapped referenced `bool` to base the new wrapped referenced `bool` on.
	 * @return ReferencedBoolInterface The new wrapped referenced `bool`.
	 */
	public static function fromReferencedBool( ReferencedBoolInterface $value ): ReferencedBoolInterface;

	/**
	 * Gets the value of the wrapped referenced `bool`.
	 * @return bool The value of the wrapped referenced `bool`.
	 */
	public function &getValue(): bool;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `bool` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
