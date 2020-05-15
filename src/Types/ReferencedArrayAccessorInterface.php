<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types;

use CodeKandis\Shorty\Types\Wrapped\ReferencedArrayInterface;

/**
 * Represents the interface of all referenced `array` accessors.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ReferencedArrayAccessorInterface extends ReferencedArrayInterface
{
	/**
	 * Creates a referenced array accessor from another referenced `array` accessor.
	 * @param ReferencedArrayAccessorInterface $value The referenced `array` accessor to base the new referenced `array` accessor on.
	 * @return ReferencedArrayAccessorInterface The new referenced `array` accessor.
	 */
	public static function fromReferencedArrayAccessor( ReferencedArrayAccessorInterface $value ): ReferencedArrayAccessorInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the referenced `array` accessor.
	 * @return array The value of the referenced `array` accessor.
	 */
	public function &getValue(): array;

	/**
	 * @inheritDoc
	 * Converts the value of the referenced `array` accessor into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;

	/**
	 * Determines if the array has a specific key/value pair.
	 * @param string $key The key to determine if its value exists.
	 * @return bool `true` if the array has the specific key/value pair, `false` otherwise.
	 */
	public function has( string $key ): bool;

	/**
	 * Gets a value from the array.
	 * @param string $key The key to get its value.
	 * @return mixed The value from the array.
	 * @throws KeyIsOutOfBoundsException The key is out of bounds. The list contains no elements.
	 * @throws KeyIsOutOfBoundsException The key is out of bounds.
	 */
	public function get( string $key );

	/**
	 * Gets a value from the array if it exists, a default value otherwise.
	 * @param string $key The key to get its value from the array.
	 * @param mixed $default The default value if the key value pair does not exist.
	 * @return mixed The value from the array if it exists, the default value otherwise.
	 */
	public function getDefaulted( string $key, $default );

	/**
	 * Sets a value of the array.
	 * @param string $key The key to set its value to the array.
	 * @param mixed $value The value to set.
	 */
	public function set( string $key, $value ): void;

	/**
	 * Deletes a value from the array.
	 * @param string $key The key to delete its value from the array.
	 * @throws KeyIsOutOfBoundsException The key is out of bounds. The list contains no elements.
	 * @throws KeyIsOutOfBoundsException The key is out of bounds.
	 */
	public function delete( string $key ): void;
}
