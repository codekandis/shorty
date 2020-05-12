<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Comparators;

use CodeKandis\Shorty\AbstractObject;

/**
 * Represents the default comparator using mathematical value comparison.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class StandardComparator extends AbstractObject implements ComparatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function compare( $value_1, $value_2 ): int
	{
		return $value_1 <=> $value_2;
	}
}
