<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\Collections\DuplicateElementException;
use CodeKandis\Shorty\Collections\ElementIsNotValidException;
use CodeKandis\Shorty\Collections\ElementIsNullException;
use CodeKandis\Shorty\Collections\Set;

/**
 * Represents a validator which validates with an immutable set of validators.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ImmutableValidatorSet extends Set implements ValidatorInterface
{
	/**
	 * Constructor method.
	 * @param iterable $elements The initial validators.
	 * @throws ElementIsNullException The value of the element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 * @throws DuplicateElementException The element has already been added.
	 */
	public function __construct( iterable $elements = [] )
	{
		parent::__construct( new ValidatorInterfaceValidator(), $elements );
	}

	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		$result = true;
		/**
		 * @var ValidatorInterface $element
		 */
		foreach ( $this as $element )
		{
			$result = $result && $element->validate( $value );
		}

		return $result;
	}
}
