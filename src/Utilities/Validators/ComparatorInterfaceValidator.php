<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\Utilities\Comparators\ComparatorInterface;

/**
 * Represents a validator which validates if a value is an instance of `ComparatorInterface`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ComparatorInterfaceValidator extends InstanceOfValidator
{
	/**
	 * @inheritDoc
	 */
	public function __construct()
	{
		parent::__construct( ComparatorInterface::class );
	}
}
