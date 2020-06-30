<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Predictors;

use Closure;
use CodeKandis\Shorty\Types\Wrapped\ClosureInterface;

/**
 * Represents the interface of all predictor `Closure` containers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface PredictorClosureContainerInterface extends ClosureInterface, PredictorInterface
{
	/**
	 * Creates a predictor `Closure` container from another predictor `Closure` container.
	 * @param PredictorClosureContainerInterface $value The predictor `Closure` container to base the new predictor `Closure` container on.
	 * @return PredictorClosureContainerInterface The new predictor `Closure` container.
	 */
	public static function fromPredictorClosureContainer( PredictorClosureContainerInterface $value ): PredictorClosureContainerInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the predictor `Closure` container.
	 * @return Closure The value of the predictor `Closure` container.
	 */
	public function getValue(): Closure;

	/**
	 * @inheritDoc
	 * Converts the value of the predictor `Closure` container into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
