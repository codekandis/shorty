<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Predictors;

use CodeKandis\Shorty\Types\ClosureContainer;

/**
 * Represents a predictor which predicts with a closure.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class PredictorClosureContainer extends ClosureContainer implements PredictorClosureContainerInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromPredictorClosureContainer( PredictorClosureContainerInterface $value ): PredictorClosureContainerInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function predict( $value ): bool
	{
		return $this->invoke( $value );
	}
}
