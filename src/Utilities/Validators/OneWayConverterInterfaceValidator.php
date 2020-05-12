<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Validators;

use CodeKandis\Shorty\Utilities\Converters\OneWayConverterInterface;

/**
 * Represents a validator which validates if a value is an instance of `OneWayConverterInterface`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class OneWayConverterInterfaceValidator extends InstanceOfValidator
{
	/**
	 * @inheritDoc
	 */
	public function __construct()
	{
		parent::__construct( OneWayConverterInterface::class );
	}
}
