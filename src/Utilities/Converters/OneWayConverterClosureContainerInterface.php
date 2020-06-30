<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Utilities\Converters;

use Closure;
use CodeKandis\Shorty\Types\Wrapped\ClosureInterface;

/**
 * Represents the interface of all one-way converter `Closure` containers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface OneWayConverterClosureContainerInterface extends ClosureInterface, OneWayConverterInterface
{
	/**
	 * Creates a one-way converter `Closure` container from another comparator `Closure` container.
	 * @param OneWayConverterClosureContainerInterface $value The one-way converter `Closure` container to base the new one-way converter `Closure` container on.
	 * @return OneWayConverterClosureContainerInterface The new one-way converter `Closure` container.
	 */
	public static function fromOneWayConverterClosureContainer( OneWayConverterClosureContainerInterface $value ): OneWayConverterClosureContainerInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the one-way converter `Closure` container.
	 * @return Closure The value of the one-way converter `Closure` container.
	 */
	public function getValue(): Closure;

	/**
	 * @inheritDoc
	 * Converts the value of the one-way converter `Closure` container into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
