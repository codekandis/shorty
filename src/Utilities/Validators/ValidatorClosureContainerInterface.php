<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use Closure;
use CodeKandis\Shorty\Types\Wrapped\ClosureInterface;

/**
 * Represents the interface of all validator `Closure` containers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidatorClosureContainerInterface extends ClosureInterface, ValidatorInterface
{
	/**
	 * Creates a validator `Closure` container from another validator `Closure` container.
	 * @param ValidatorClosureContainerInterface $value The validator `Closure` container to base the new validator `Closure` container on.
	 * @return ValidatorClosureContainerInterface The new validator `Closure` container.
	 */
	public static function fromValidatorClosureContainer( ValidatorClosureContainerInterface $value ): ValidatorClosureContainerInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the validator `Closure` container.
	 * @return Closure The value of the validator `Closure` container.
	 */
	public function getValue(): Closure;

	/**
	 * @inheritDoc
	 * Converts the value of the validator `Closure` container into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
