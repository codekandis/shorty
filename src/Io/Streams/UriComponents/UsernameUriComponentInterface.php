<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all username URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface UsernameUriComponentInterface extends StringInterface
{
	/**
	 * Creates a wrapped username URI component from another wrapped username URI component.
	 * @param UsernameUriComponentInterface $value The wrapped username URI component to base the new wrapped username URI component on.
	 * @return UsernameUriComponentInterface The new wrapped username URI component.
	 */
	public static function fromUsernameUriComponent( UsernameUriComponentInterface $value ): UsernameUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped username URI component.
	 * @return string The value of the wrapped username URI component.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped username URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
