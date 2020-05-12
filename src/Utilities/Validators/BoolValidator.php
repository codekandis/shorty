<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;
use function is_bool;

/**
 * Represents a validator which validates if a value is a `bool`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return is_bool( $value );
	}
}
