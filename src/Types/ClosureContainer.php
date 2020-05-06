<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types;

use CodeKandis\Shorty\Types\Wrapped\AbstractClosure;
use ReflectionFunction;

/**
 * Represents a `Closure` container.
 * @package codekandis/shorty
 * @author Christian Ramelow
 */
class ClosureContainer extends AbstractClosure implements ClosureContainerInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromClosureContainer( ClosureContainerInterface $value ): ClosureContainerInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * Stores the `ReflectionFunction` of the wrapped `Closure`.
	 * @var ReflectionFunction
	 */
	private ReflectionFunction $reflectedOriginClosure;

	/**
	 * @inheritDoc
	 */
	public function getReflectedClosure(): ReflectionFunction
	{
		return $this->reflectedOriginClosure
		       ?? $this->reflectedOriginClosure = new ReflectionFunction( $this->originClosure );
	}

	/**
	 * @inheritDoc
	 */
	public function __invoke( ...$arguments )
	{
		return $this->getReflectedClosure()->invokeArgs( $arguments );
	}

	/**
	 * @inheritDoc
	 */
	public function invoke( ...$arguments )
	{
		return $this->getReflectedClosure()->invokeArgs( $arguments );
	}
}
