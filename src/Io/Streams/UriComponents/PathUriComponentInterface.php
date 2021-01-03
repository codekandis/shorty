<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all path URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface PathUriComponentInterface extends StringInterface
{
	/**
	 * Creates a wrapped path URI component from another wrapped path URI component.
	 * @param PathUriComponentInterface $value The wrapped path URI component to base the new wrapped path URI component on.
	 * @return PathUriComponentInterface The new wrapped path URI component.
	 */
	public static function fromPathUriComponent( PathUriComponentInterface $value ): PathUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped path URI component.
	 * @return string The value of the wrapped path URI component.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped path URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
