<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Converters;

/**
 * Represents the interface of all one-way converters.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface OneWayConverterInterface
{
	/**
	 * Converts a value.
	 * @param mixed $value The value which has to be converted.
	 * @return mixed The converted value.
	 */
	public function convert( $value );
}
