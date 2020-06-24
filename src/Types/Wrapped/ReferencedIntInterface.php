<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedIntInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `int` from another wrapped referenced `int`.
	 * @param static $value The wrapped referenced `int` to base the new wrapped referenced `int` on.
	 * @return static The new wrapped referenced `int`.
	 */
	public static function fromReferencedInt( ReferencedIntInterface $value ): ReferencedIntInterface;

	/**
	 * Gets the value of the wrapped referenced `int`.
	 * @return int The value of the wrapped referenced `int`.
	 */
	public function &getValue(): int;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `int` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
