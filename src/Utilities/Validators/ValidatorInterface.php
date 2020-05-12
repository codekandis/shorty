<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

/**
 * Represents the interface of all validators.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidatorInterface
{
	/**
	 * Validates a passed value.
	 * @param mixed $value The value which has to be validated.
	 * @return bool `true` if the value passed the validation, `false` otherwise.
	 */
	public function validate( $value ): bool;
}
