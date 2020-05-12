<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\AbstractObject;

/**
 * Represents a validator which validates if a value is null.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class InstanceOfValidator extends AbstractObject implements ValidatorInterface
{
	/**
	 * Stores the fully qualified name of an interface or a class.
	 * @var string
	 */
	private string $interfaceOrClassName;

	/**
	 * Constructor method.
	 * @param string $interfaceOrClassName The fully qualified name of an interface or a class.
	 */
	public function __construct( string $interfaceOrClassName )
	{
		$this->interfaceOrClassName = $interfaceOrClassName;
	}

	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return $value instanceof $this->interfaceOrClassName;
	}
}
