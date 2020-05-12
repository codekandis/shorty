<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;
use function is_int;

/**
 * Represents a validator which validates if a value is an `int`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return is_int( $value );
	}
}
