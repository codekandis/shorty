<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;
use function is_string;

/**
 * Represents a validator which validates if a value is a `string`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return is_string( $value );
	}
}
