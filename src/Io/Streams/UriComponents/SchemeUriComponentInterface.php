<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all scheme URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface SchemeUriComponentInterface extends StringInterface
{
	/**
	 * Creates a wrapped scheme URI component from another wrapped scheme URI component.
	 * @param SchemeUriComponentInterface $value The wrapped scheme URI component to base the new wrapped scheme URI component on.
	 * @return SchemeUriComponentInterface The new wrapped scheme URI component.
	 */
	public static function fromSchemeUriComponent( SchemeUriComponentInterface $value ): SchemeUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped scheme URI component.
	 * @return string The value of the wrapped scheme URI component.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped scheme URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
