<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Comparators;

/**
 * Represents the interface of all comparators.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ComparatorInterface
{
	/**
	 * Compares two values.
	 * @param mixed $value_1 The first value.
	 * @param mixed $value_2 The second value.
	 * @return int Less than 0 if the value passed in $value_1 is less than $value_2, equal to 0 if the value passed in $value_1 is equal to the value passed in $value_2 and greater than 1 if the value passed in $value_1 is greater then the value passed in $value_2.
	 */
	public function compare( int $value_1, $value_2 ): int;
}
