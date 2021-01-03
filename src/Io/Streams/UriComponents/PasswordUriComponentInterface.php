<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all password URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface PasswordUriComponentInterface extends StringInterface
{
	/**
	 * Creates a wrapped password URI component from another wrapped password URI component.
	 * @param PasswordUriComponentInterface $value The wrapped password URI component to base the new wrapped password URI component on.
	 * @return PasswordUriComponentInterface The new wrapped password URI component.
	 */
	public static function fromPasswordUriComponent( PasswordUriComponentInterface $value ): PasswordUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped password URI component.
	 * @return string The value of the wrapped password URI component.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped password URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
