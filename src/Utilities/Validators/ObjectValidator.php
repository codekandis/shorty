<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;
use function is_object;

/**
 * Represents a validator which validates if a value is an `object`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return is_object( $value );
	}
}
