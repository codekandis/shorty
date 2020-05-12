<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Converters;

use CodeKandis\Shorty\Types\ClosureContainer;

/**
 * Represents a one-way converter which converts with a closure.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class OneWayConverterClosureContainer extends ClosureContainer implements OneWayConverterClosureContainerInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromOneWayConverterClosureContainer( OneWayConverterClosureContainerInterface $value ): OneWayConverterClosureContainerInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function convert( $value )
	{
		return $this->invoke( $value );
	}
}
