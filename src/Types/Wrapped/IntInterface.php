<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `int` from another wrapped `int`.
	 * @param IntInterface $value The wrapped `int` to base the new wrapped `int` on.
	 * @return IntInterface The new wrapped `int`.
	 */
	public static function fromInt( IntInterface $value ): IntInterface;

	/**
	 * Gets the value of the wrapped `int`.
	 * @return int The value of the wrapped `int`.
	 */
	public function getValue(): int;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `int` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
