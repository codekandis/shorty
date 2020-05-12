<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;

/**
 * Represents a validator which validates if a value is `null`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return null === $value;
	}
}
