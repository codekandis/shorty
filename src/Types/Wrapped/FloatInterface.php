<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `float` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FloatInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `float` from another wrapped `float`.
	 * @param FloatInterface $value The wrapped `float` to base the new wrapped `float` on.
	 * @return FloatInterface The new wrapped `float`.
	 */
	public static function fromFloat( FloatInterface $value ): FloatInterface;

	/**
	 * Gets the value of the wrapped `float`.
	 * @return float The value of the wrapped `float`.
	 */
	public function getValue(): float;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `float` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
