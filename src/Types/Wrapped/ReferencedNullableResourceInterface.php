<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `nullable resource` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedNullableResourceInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `nullable resource` from another wrapped referenced `nullable resource`.
	 * @param ReferencedNullableResourceInterface $value The wrapped referenced `nullable resource` to base the new wrapped referenced `nullable resource` on.
	 * @return ReferencedNullableResourceInterface The new wrapped referenced `nullable resource`.
	 */
	public static function fromReferencedNullableResource( ReferencedNullableResourceInterface $value ): ReferencedNullableResourceInterface;

	/**
	 * Gets the value of the wrapped referenced `nullable resource`.
	 * @return null|resource The value of the wrapped referenced `nullable resource`.
	 */
	public function &getValue();

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `nullable resource` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
