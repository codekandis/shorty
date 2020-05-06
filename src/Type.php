<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty;

use ReflectionClass;
use ReflectionObject;
use function get_class;

/**
 * Represents the type of an object.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class Type extends AbstractObject implements TypeInterface
{
	/**
	 * Stores the object the type depends on.
	 * @var object
	 */
	private object $instance;

	/**
	 * Stores the `ReflectionObject` representing the contained object.
	 * @var ReflectionObject
	 */
	private ReflectionObject $reflectedObject;

	/**
	 * Stores the `ReflectionClass` representing the contained object.
	 * @var ReflectionClass
	 */
	private ReflectionClass $reflectedClass;

	/**
	 * Constructor method.
	 * @param object $instance The object the type depends on.
	 */
	public function __construct( object $instance )
	{
		$this->instance = $instance;
	}

	/**
	 * @inheritDoc
	 */
	public function getInstance(): object
	{
		return $this->instance;
	}

	/**
	 * @inheritDoc
	 */
	public function getTypeName(): string
	{
		return get_class( $this->instance );
	}

	/**
	 * @inheritDoc
	 */
	public function isIdentical( object $object ): bool
	{
		return $object === $this->instance;
	}

	/**
	 * @inheritDoc
	 */
	public function isEqual( object $object ): bool
	{
		return $object == $this->instance;
	}

	/**
	 * @inheritDoc
	 */
	public function isInstanceOf( object $object ): bool
	{
		return $this->instance instanceof $object;
	}

	/**
	 * @inheritDoc
	 */
	public function getReflectedObject(): ReflectionObject
	{
		return $this->reflectedObject
		       ?? $this->reflectedObject = new ReflectionObject( $this->instance );
	}

	/**
	 * @inheritDoc
	 */
	public function getReflectedClass(): ReflectionClass
	{
		return $this->reflectedClass
		       ?? $this->reflectedClass = new ReflectionClass( $this->instance );
	}
}
