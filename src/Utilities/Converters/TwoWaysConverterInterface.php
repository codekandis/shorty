<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Converters;

/**
 * Represents the interface of all two-ways converters.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TwoWaysConverterInterface
{
	/**
	 * Converts into a value.
	 * @param mixed $value The value which has to be converted.
	 * @return mixed The converted value.
	 */
	public function convertTo( $value );

	/**
	 * Converts from a value.
	 * @param mixed $value The value which has to be converted.
	 * @return mixed The converted value.
	 */
	public function convertFrom( $value );
}
