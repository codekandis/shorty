<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `array` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArrayInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `array` from another wrapped `array`.
	 * @param ArrayInterface $value The wrapped `array` to base the new wrapped `array` on.
	 * @return ArrayInterface The new wrapped `array`.
	 */
	public static function fromArray( ArrayInterface $value ): ArrayInterface;

	/**
	 * Gets the value of the wrapped `array`.
	 * @return array The value of the wrapped `array`.
	 */
	public function getValue(): array;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `array` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
