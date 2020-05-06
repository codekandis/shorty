<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty;

/**
 * Represents the interface of all classes able to be converted into its `array` representation.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArrayableInterface
{
	/**
	 * Converts the object into its `array` representation.
	 * @return array The `array` representation.
	 */
	public function toArray(): array;
}
