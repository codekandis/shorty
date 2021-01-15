<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Text;

use CodeKandis\Shorty\Types\Wrapped\IntInterface;

/**
 * Represents the interface of all character encoding lengths.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EncodingLengthsInterface extends IntInterface
{
	/**
	 * Creates a character encoding length from another character encoding length.
	 * @param EncodingLengthsInterface $value The character encoding length to base the new character encoding length on.
	 * @return EncodingLengthsInterface The new character encoding length.
	 */
	public static function fromEncodingLengths( EncodingLengthsInterface $value ): EncodingLengthsInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the character encoding length.
	 * @return int The value of the character encoding length.
	 */
	public function getValue(): int;

	/**
	 * @inheritDoc
	 * Converts the value of the character encoding length into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
