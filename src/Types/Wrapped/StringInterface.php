<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the base class of all wrapped `string` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `string` from another wrapped `string`.
	 * @param StringInterface $value The wrapped `string` to base the new wrapped `string` on.
	 * @return StringInterface The new wrapped `string`.
	 */
	public static function fromString( StringInterface $value ): StringInterface;

	/**
	 * Gets the value of the wrapped `string`.
	 * @return string The value of the wrapped `string`.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `string` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
