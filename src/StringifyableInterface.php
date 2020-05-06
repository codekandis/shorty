<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty;

/**
 * Represents the interface of all classes able to be converted into its `string` representation.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringifyableInterface
{
	/**
	 * Converts the object into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
