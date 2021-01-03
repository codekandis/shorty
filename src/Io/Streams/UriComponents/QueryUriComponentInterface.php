<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all query URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface QueryUriComponentInterface extends StringInterface
{
	/**
	 * Creates a wrapped query URI component from another wrapped query URI component.
	 * @param QueryUriComponentInterface $value The wrapped query URI component to base the new wrapped query URI component on.
	 * @return QueryUriComponentInterface The new wrapped query URI component.
	 */
	public static function fromQueryUriComponent( QueryUriComponentInterface $value ): QueryUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped query URI component.
	 * @return string The value of the wrapped query URI component.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped query URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
