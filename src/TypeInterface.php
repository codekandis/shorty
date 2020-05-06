<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty;

use ReflectionClass;
use ReflectionObject;

/**
 * Represents the interface of all types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypeInterface
{
	/**
	 * Gets the object the type depends on.
	 * @return object The object the type depends on.
	 */
	public function getInstance(): object;

	/**
	 * Gets the name of the class of the contained object.
	 * @return string The name of the class of the contained object.
	 */
	public function getTypeName(): string;

	/**
	 * Determines if the contained object references to the same instance of the same class like the passed object.
	 * @param object $object The passed object to determine if the contained object is identical to.
	 * @return bool `true` if the contained object is identical to the passed object, `false` otherwise.
	 */
	public function isIdentical( object $object );

	/**
	 * Determines if the contained object is an instance of the same class, has the same attributes and values like the passed object.
	 * @param object $object The passed object to determine if the contained object is equal to.
	 * @return bool `true` if the contained object is equal to the passed object, `false` otherwise.
	 */
	public function isEqual( object $object ): bool;

	/**
	 * Determines if the contained object is an instance of the class which the passed object is an instance of.
	 * @param object $object The passed object to determine if the contained oject is an instance of.
	 * @return bool `true` if the contained instance is an instance of the passed object's class, `false` otherwise.
	 */
	public function isInstanceOf( object $object ): bool;

	/**
	 * Gets the `ReflectionObject` representing the contained object.
	 * @return ReflectionObject The `ReflectionObject` representing the contained object.
	 */
	public function getReflectedObject(): ReflectionObject;

	/**
	 * Gets `ReflectionClass` representing the contained object.
	 * @return ReflectionClass The `ReflectionClass` representing the contained object.
	 */
	public function getReflectedClass(): ReflectionClass;
}
