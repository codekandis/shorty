<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `nullable resource` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableResourceInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `nullable resource` from another wrapped `nullable resource`.
	 * @param NullableResourceInterface $value The wrapped `nullable resource` to base the new wrapped `nullable resource` on.
	 * @return NullableResourceInterface The new wrapped `nullable resource`.
	 */
	public static function fromNullableResource( NullableResourceInterface $value ): NullableResourceInterface;

	/**
	 * Gets the value of the wrapped `nullable resource`.
	 * @return null|resource The value of the wrapped `nullable resource`.
	 */
	public function getValue();

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `nullable resource` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
