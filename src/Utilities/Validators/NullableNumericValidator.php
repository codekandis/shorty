<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;
use function is_numeric;

/**
 * Represents a validator which validates if a value is a `nullable numeric`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableNumericValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return null === $value || is_numeric( $value );
	}
}
