<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Comparators;

use Closure;
use CodeKandis\Shorty\Types\Wrapped\ClosureInterface;

/**
 * Represents the interface of all comparator `Closure` containers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ComparatorClosureContainerInterface extends ClosureInterface, ComparatorInterface
{
	/**
	 * Creates a comparator `Closure` container from another comparator `Closure` container.
	 * @param ComparatorClosureContainerInterface $value The comparator `Closure` container to base the new comparator `Closure` container on.
	 * @return ComparatorClosureContainerInterface The new comparator `Closure` container.
	 */
	public static function fromComparatorClosureContainer( ComparatorClosureContainerInterface $value ): ComparatorClosureContainerInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the comparator `Closure` container.
	 * @return Closure The value of the comparator `Closure` container.
	 */
	public function getValue(): Closure;

	/**
	 * @inheritDoc
	 * Converts the value of the comparator `Closure` container into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
