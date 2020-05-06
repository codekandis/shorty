<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types;

use Closure;
use CodeKandis\Shorty\Types\Wrapped\ClosureInterface;
use ReflectionFunction;

/**
 * Represents the interface of all `Closure` containers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ClosureContainerInterface extends ClosureInterface
{
	/**
	 * Creates a `Closure` container from another `Closure` container.
	 * @param ClosureContainerInterface $value The `Closure` container to base the new `Closure` container on.
	 * @return ClosureContainerInterface The new `Closure` container.
	 */
	public static function fromClosureContainer( ClosureContainerInterface $value ): ClosureContainerInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the `Closure` container.
	 * @return Closure The value of the `Closure` container.
	 */
	public function getValue(): Closure;

	/**
	 * @inheritDoc
	 * Converts the value of the `Closure` container into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;

	/**
	 * Gets the `ReflectionFunction` representing the wrapped `Closure`.
	 * @return ReflectionFunction The `ReflectionFunction` representing the wrapped `Closure`.
	 */
	public function getReflectedClosure(): ReflectionFunction;

	/**
	 * Invokes the wrapped `Closure` with various passed arguments.
	 * @param mixed $arguments The arguments to pass to the invoked wrapped `Closure`.
	 * @return mixed The return value of the invoked wrapped `Closure`.
	 */
	public function __invoke( ...$arguments );

	/**
	 * Invokes the wrapped `Closure` with various passed arguments.
	 * @param mixed $arguments The arguments to pass to the invoked wrapped `Closure`.
	 * @return mixed The return value of the invoked wrapped `Closure`.
	 */
	public function invoke( ...$arguments );
}
