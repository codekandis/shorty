<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `string` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedStringInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `string` from another wrapped referenced `string`.
	 * @param ReferencedStringInterface $value The wrapped referenced `string` to base the new wrapped referenced `string` on.
	 * @return ReferencedStringInterface The new wrapped referenced `string`.
	 */
	public static function fromReferencedString( ReferencedStringInterface $value ): ReferencedStringInterface;

	/**
	 * Gets the value of the wrapped referenced `string`.
	 * @return string The value of the wrapped referenced `string`.
	 */
	public function &getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `string` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
