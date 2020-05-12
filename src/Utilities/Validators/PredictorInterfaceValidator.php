<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\Utilities\Predictors\PredictorInterface;

/**
 * Represents a validator which validates if a value is an instance of `PredictorInterface`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class PredictorInterfaceValidator extends InstanceOfValidator
{
	/**
	 * @inheritDoc
	 */
	public function __construct()
	{
		parent::__construct( PredictorInterface::class );
	}
}
