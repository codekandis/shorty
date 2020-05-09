<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty;

/**
 * Represents the interface of all objects.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ObjectInterface
{
	/**
	 * Returns the `string` representation of the object.
	 * @return string The `string` representation of the object.
	 */
	public function __toString(): string;

	/**
	 * Gets the type of the object.
	 * @return TypeInterface The type of the object.
	 */
	public function getType(): TypeInterface;
}
