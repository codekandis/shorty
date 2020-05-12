<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\Utilities\Converters\TwoWaysConverterInterface;

/**
 * Represents a validator which validates if a value is an instance of `TwoWaysConverterInterface`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class TwoWaysConverterInterfaceValidator extends InstanceOfValidator
{
	/**
	 * @inheritDoc
	 */
	public function __construct()
	{
		parent::__construct( TwoWaysConverterInterface::class );
	}
}
