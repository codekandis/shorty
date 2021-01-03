<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all host URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface HostUriComponentInterface extends StringInterface
{
	/**
	 * Creates a wrapped host URI component from another wrapped host URI component.
	 * @param HostUriComponentInterface $value The wrapped host URI component to base the new wrapped host URI component on.
	 * @return HostUriComponentInterface The new wrapped host URI component.
	 */
	public static function fromHostUriComponent( HostUriComponentInterface $value ): HostUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped host URI component.
	 * @return string The value of the wrapped host URI component.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped host URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
