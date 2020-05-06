<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty;

use stdClass;
use function get_called_class;

/**
 * Represents the base class of all classes.
 * @package codekandis/shorty
 * @author Christian Ramelow
 */
abstract class AbstractObject extends stdClass implements ObjectInterface
{
	/**
	 * @inheritDoc
	 */
	public function __toString(): string
	{
		return get_called_class();
	}
}
