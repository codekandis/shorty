<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped referenced `resource` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedResourceInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped referenced `resource` from another wrapped referenced `resource`.
	 * @param ReferencedResourceInterface $value The wrapped referenced `resource` to base the new wrapped referenced `resource` on.
	 * @return ReferencedResourceInterface The new wrapped referenced `resource`.
	 */
	public static function fromReferencedResource( ReferencedResourceInterface $value ): ReferencedResourceInterface;

	/**
	 * Gets the value of the wrapped referenced `resource`.
	 * @return resource The value of the wrapped referenced `resource`.
	 */
	public function &getValue();

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped referenced `resource` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
