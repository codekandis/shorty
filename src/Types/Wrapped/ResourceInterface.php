<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

/**
 * Represents the interface of all wrapped `resource` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ResourceInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `resource` from another wrapped `resource`.
	 * @param ResourceInterface $value The wrapped `resource` to base the new wrapped `resource` on.
	 * @return ResourceInterface The new wrapped `resource`.
	 * @throws ValueIsNotAResourceException The value is not a resource.
	 */
	public static function fromResource( ResourceInterface $value ): ResourceInterface;

	/**
	 * Gets the value of the wrapped `resource`.
	 * @return resource The value of the wrapped `resource`.
	 */
	public function getValue();

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `resource` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
