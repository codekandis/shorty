<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty;

/**
 * Represents the interface of all objects able to be recursively converted into its `array` representation.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RecursivelyArrayableInterface
{
	/**
	 * Converts the object recursively into its `array` representation.
	 * @return array The `array` representation.
	 */
	public function toRecursiveArray(): array;
}
