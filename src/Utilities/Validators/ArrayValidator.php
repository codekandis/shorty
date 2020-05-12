<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;
use function is_array;

/**
 * Represents a validator which validates if a value is an `array`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ArrayValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return is_array( $value );
	}
}
