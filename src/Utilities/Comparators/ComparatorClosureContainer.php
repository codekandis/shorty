<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Comparators;

use CodeKandis\Shorty\Types\ClosureContainer;

/**
 * Represents a comparator which compares with a closure.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ComparatorClosureContainer extends ClosureContainer implements ComparatorClosureContainerInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromComparatorClosureContainer( ComparatorClosureContainerInterface $value ): ComparatorClosureContainerInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function compare( $value_1, $value_2 ): int
	{
		return $this->invoke( $value_1, $value_2 );
	}
}
