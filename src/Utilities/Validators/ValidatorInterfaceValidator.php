<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

/**
 * Represents a validator which validates if a value is an instance of `ValidatorInterface`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorInterfaceValidator extends InstanceOfValidator
{
	/**
	 * @inheritDoc
	 */
	public function __construct()
	{
		parent::__construct( ValidatorInterface::class );
	}
}
