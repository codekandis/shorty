<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Io\Streams\UriComponents\FragmentUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\HostUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\PasswordUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\PathUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\PortUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\QueryUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\SchemeUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\UsernameUriComponentInterface;
use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all wrapped URIs.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface UriInterface extends StringInterface
{
	/**
	 * Creates a wrapped URI from another wrapped URI.
	 * @param UriInterface $value The wrapped URI to base the new wrapped URI on.
	 * @return UriInterface The new wrapped URI.
	 */
	public static function fromUri( UriInterface $value ): UriInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped URI.
	 * @return string The value of the wrapped URI.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped URI into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;

	/**
	 * Gets the scheme of the URI.
	 * @return ?SchemeUriComponentInterface The scheme of the URI.
	 */
	public function getScheme(): ?SchemeUriComponentInterface;

	/**
	 * Gets the username of the URI.
	 * @return ?UsernameUriComponentInterface The username of the URI.
	 */
	public function getUsername(): ?UsernameUriComponentInterface;

	/**
	 * Gets the password of the URI.
	 * @return ?PasswordUriComponentInterface The password of the URI.
	 */
	public function getPassword(): ?PasswordUriComponentInterface;

	/**
	 * Gets the host of the URI.
	 * @return ?HostUriComponentInterface The host of the URI.
	 */
	public function getHost(): ?HostUriComponentInterface;

	/**
	 * Gets the port of the URI.
	 * @return ?PortUriComponentInterface The port of the URI.
	 */
	public function getPort(): ?PortUriComponentInterface;

	/**
	 * Gets the path of the URI.
	 * @return ?PathUriComponentInterface The path of the URI.
	 */
	public function getPath(): ?PathUriComponentInterface;

	/**
	 * Gets the query of the URI.
	 * @return ?QueryUriComponentInterface The query of the URI.
	 */
	public function getQuery(): ?QueryUriComponentInterface;

	/**
	 * Gets the fragment of the URI.
	 * @return ?FragmentUriComponentInterface The fragment of the URI.
	 */
	public function getFragment(): ?FragmentUriComponentInterface;
}
