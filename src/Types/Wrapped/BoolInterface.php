<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `bool` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BoolInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `bool` from another wrapped `bool`.
	 * @param BoolInterface $value The wrapped `bool` to base the new wrapped `bool` on.
	 * @return BoolInterface The new wrapped `bool`.
	 */
	public static function fromBool( BoolInterface $value ): BoolInterface;

	/**
	 * Gets the value of the wrapped `bool`.
	 * @return bool The value of the wrapped `bool`.
	 */
	public function getValue(): bool;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `bool` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
