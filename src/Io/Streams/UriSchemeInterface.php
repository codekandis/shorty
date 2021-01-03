<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all URI schemes.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface UriSchemeInterface extends StringInterface
{
	/**
	 * Creates a wrapped URI scheme from another wrapped URI scheme.
	 * @param UriSchemeInterface $value The wrapped URI scheme to base the new wrapped URI scheme on.
	 * @return UriSchemeInterface The new wrapped URI scheme.
	 */
	public static function fromUriScheme( UriSchemeInterface $value ): UriSchemeInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped URI scheme.
	 * @return string The value of the wrapped URI scheme.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped URI scheme into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
