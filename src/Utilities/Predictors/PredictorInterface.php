<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Predictors;

/**
 * Represents the interface of all predictors.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface PredictorInterface
{
	/**
	 * Determines if a value matches the predicate.
	 * @param mixed $value The value which has to be determined.
	 * @return bool `true` if the value matches the predicate, `false` otherwise.
	 */
	public function predict( $value ): bool;
}
