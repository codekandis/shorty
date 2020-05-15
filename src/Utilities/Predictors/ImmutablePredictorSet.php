<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Predictors;

use CodeKandis\Shorty\Collections\DuplicateElementException;
use CodeKandis\Shorty\Collections\ElementIsNotValidException;
use CodeKandis\Shorty\Collections\ElementIsNullException;
use CodeKandis\Shorty\Collections\Set;
use CodeKandis\Shorty\Utilities\Validators\PredictorInterfaceValidator;

/**
 * Represents a predictor which predicts with an immutable set of predictors.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ImmutablePredictorSet extends Set implements PredictorInterface
{
	/**
	 * Constructor method.
	 * @param iterable $elements The initial validators.
	 * @throws ElementIsNullException The value of the element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 * @throws DuplicateElementException The element has already been added.
	 */
	public function __construct( iterable $elements = [] )
	{
		parent::__construct( new PredictorInterfaceValidator(), $elements );
	}

	/**
	 * @inheritDoc
	 */
	public function predict( $value ): bool
	{
		$result = true;
		/**
		 * @var PredictorInterface $element
		 */
		foreach ( $this as $element )
		{
			$result = $result && $element->predict( $value );
		}

		return $result;
	}
}
