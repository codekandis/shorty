<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all wrapped paths.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface PathInterface extends StringInterface
{
	/**
	 * Creates a wrapped path from another wrapped path.
	 * @param PathInterface $value The wrapped path to base the new wrapped path on.
	 * @return PathInterface The new wrapped path.
	 */
	public static function fromPath( PathInterface $value ): PathInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped path.
	 * @return string The value of the wrapped path.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped path into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;

	/**
	 * Gets the directory of the path.
	 * @return string The directory of the path.
	 */
	public function getDirectoryName(): string;

	/**
	 * Gets the base name of the path.
	 * @return string The base name of the path.
	 */
	public function getBaseName(): string;

	/**
	 * Gets the name of the path.
	 * @return string The name of the path.
	 */
	public function getName(): string;

	/**
	 * Gets the extension of the path.
	 * @return string The extension of the path.
	 */
	public function getExtension(): string;
}
