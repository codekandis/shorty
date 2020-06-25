<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use Closure;

/**
 * Represents the interface of all wrapped `Closure` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ClosureInterface extends WrappedTypeInterface
{
	/**
	 * Creates a wrapped `Closure` from another wrapped `Closure`.
	 * @param ClosureInterface $value The wrapped `Closure` to base the new wrapped `Closure` on.
	 * @return ClosureInterface The new wrapped `Closure`.
	 */
	public static function fromClosure( ClosureInterface $value ): ClosureInterface;

	/**
	 * Gets the value of the wrapped `Closure`.
	 * @return Closure The value of the wrapped `Closure`.
	 */
	public function getValue(): Closure;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `Closure` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
