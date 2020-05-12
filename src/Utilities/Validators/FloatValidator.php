<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;
use function is_float;

/**
 * Represents a validator which validates if a value is a `float`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return is_float( $value );
	}
}
