<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\Types\ClosureContainer;

/**
 * Represents a validator which validates with a closure.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorClosureContainer extends ClosureContainer implements ValidatorClosureContainerInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromValidatorClosureContainer( ValidatorClosureContainerInterface $value ): ValidatorClosureContainerInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return $this->invoke( $value );
	}
}
