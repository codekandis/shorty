<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Text;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all character encodings.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EncodingInterface extends StringInterface
{
	/**
	 * Creates a character encoding from another character encoding.
	 * @param EncodingInterface $value The character encoding to base the new character encoding on.
	 * @return EncodingInterface The new character encoding.
	 */
	public static function fromEncoding( EncodingInterface $value ): EncodingInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the character encoding.
	 * @return string The value of the character encoding.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the character encoding into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
