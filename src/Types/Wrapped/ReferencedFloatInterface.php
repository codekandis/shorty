<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `float` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedFloatInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `float` from another wrapped referenced `float`.
	 * @param ReferencedFloatInterface $value The wrapped referenced `float` to base the new wrapped referenced `float` on.
	 * @return ReferencedFloatInterface The new wrapped referenced `float`.
	 */
	public static function fromReferencedFloat( ReferencedFloatInterface $value ): ReferencedFloatInterface;

	/**
	 * Gets the value of the wrapped referenced `float`.
	 * @return float The value of the wrapped referenced `float`.
	 */
	public function &getValue(): float;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `float` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
