<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\IntInterface;

/**
 * Represents the interface of all port URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface PortUriComponentInterface extends IntInterface
{
	/**
	 * Creates a wrapped port URI component from another wrapped port URI component.
	 * @param PortUriComponentInterface $value The wrapped port URI component to base the new wrapped port URI component on.
	 * @return PortUriComponentInterface The new wrapped port URI component.
	 */
	public static function fromPortUriComponent( PortUriComponentInterface $value ): PortUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped port URI component.
	 * @return int The value of the wrapped port URI component.
	 */
	public function getValue(): int;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped port URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
