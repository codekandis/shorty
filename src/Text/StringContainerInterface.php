<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Text;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all `string` containers providing character encoding safe operations.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringContainerInterface extends StringInterface
{
	/**
	 * Creates a `string` container from another `string` container.
	 * @param StringContainerInterface $value The `string` container to base the new `string` container on.
	 * @param null|EncodingInterface $encoding The character encoding of the newly created `string` container. If omitted the encoding of the passed `string` container will be used.
	 * @return StringContainerInterface The new `string` container.
	 */
	public static function fromStringContainer( StringContainerInterface $value, ?EncodingInterface $encoding = null ): StringContainerInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the `string` container.
	 * @return string The value of the `string` container.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the `string` container into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;

	/**
	 * Gets the character encoding of the `string` container.
	 * @return EncodingInterface The character encoding of the `string` container.
	 */
	public function getEncoding(): EncodingInterface;

	/**
	 * Gets the length of the value of the `string` container.
	 * @return int The length of the value of the `string` container.
	 */
	public function getLength(): int;

	/**
	 * Adds a value to the `string` container.
	 * @param string $value The value to add to the `string` container.
	 * @param null|EncodingInterface $encoding The character encoding of the value. If omitted the default encoding will be used.
	 */
	public function add( string $value, ?EncodingInterface $encoding = null ): void;

	/**
	 * Adds the value of a `string` container to the `string` container.
	 * @param StringContainerInterface $container The `string` container to add its value to the `string` container.
	 */
	public function addContainer( StringContainerInterface $container ): void;
}
