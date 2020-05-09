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
	 * Stores the type of the object.
	 * @var null|TypeInterface
	 */
	private ?TypeInterface $type;

	/**
	 * @inheritDoc
	 */
	public function __toString(): string
	{
		return get_called_class();
	}

	/**
	 * @inheritDoc
	 */
	public function getType(): TypeInterface
	{
		return $this->type
		       ?? $this->type = new Type( $this );
	}
}
