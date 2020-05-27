<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Io\Streams\UriComponents\FragmentUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\FragmentUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\HostUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\HostUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\PasswordUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\PasswordUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\PathUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\PathUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\PortUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\PortUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\QueryUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\QueryUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\SchemeUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\SchemeUriComponentInterface;
use CodeKandis\Shorty\Io\Streams\UriComponents\UsernameUriComponent;
use CodeKandis\Shorty\Io\Streams\UriComponents\UsernameUriComponentInterface;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;
use function array_key_exists;
use function parse_url;
use function sprintf;

/**
 * Represents a wrapped `URI`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class Uri extends AbstractString implements UriInterface
{
	/**
	 * Represents the error message if the URI is invalid.
	 */
	protected const ERROR_URI_IS_INVALID = 'The URI `%s` is invalid.';

	/**
	 * Stores the scheme of the URI.
	 * @var ?SchemeUriComponentInterface
	 */
	private ?SchemeUriComponentInterface $scheme;

	/**
	 * Stores the username of the URI.
	 * @var ?UsernameUriComponentInterface
	 */
	private ?UsernameUriComponentInterface $username;

	/**
	 * Stores the password of the URI.
	 * @var ?PasswordUriComponentInterface
	 */
	private ?PasswordUriComponentInterface $password;

	/**
	 * Stores the host of the URI.
	 * @var ?HostUriComponentInterface
	 */
	private ?HostUriComponentInterface $host;

	/**
	 * Stores the Port of the URI.
	 * @var ?PortUriComponentInterface
	 */
	private ?PortUriComponentInterface $port;

	/**
	 * Stores the path of the URI.
	 * @var ?PathUriComponentInterface
	 */
	private ?PathUriComponentInterface $path;

	/**
	 * Stores the query of the URI.
	 * @var ?QueryUriComponentInterface
	 */
	private ?QueryUriComponentInterface $query;

	/**
	 * Stores the fragment of the URI.
	 * @var ?FragmentUriComponentInterface
	 */
	private ?FragmentUriComponentInterface $fragment;

	/**
	 * Constructor method.
	 * @param string $value The value of the URI.
	 * @throws UriIsInvalidException The URI is invalid.
	 */
	public function __construct( string $value )
	{
		parent::__construct( $value );

		$this->parseValue();
	}

	/**
	 * @inheritDoc
	 */
	public static function fromUri( UriInterface $value ): UriInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * Parses the value.
	 * @throws UriIsInvalidException The URI is invalid.
	 */
	private function parseValue(): void
	{
		if ( '' === $this->value || false === $uriComponents = parse_url( $this->value ) )
		{
			throw new UriIsInvalidException(
				sprintf(
					static::ERROR_URI_IS_INVALID,
					$this->value
				)
			);
		}

		$this->scheme   = false === array_key_exists( 'scheme', $uriComponents )
			? null
			: new SchemeUriComponent( $uriComponents[ 'scheme' ] );
		$this->username = false === array_key_exists( 'user', $uriComponents )
			? null
			: new UsernameUriComponent( $uriComponents[ 'user' ] );
		$this->password = false === array_key_exists( 'pass', $uriComponents )
			? null
			: new PasswordUriComponent( $uriComponents[ 'pass' ] );
		$this->host     = false === array_key_exists( 'host', $uriComponents )
			? null
			: new HostUriComponent( $uriComponents[ 'host' ] );
		$this->port     = false === array_key_exists( 'port', $uriComponents )
			? null
			: new PortUriComponent( $uriComponents[ 'port' ] );
		$this->path     = false === array_key_exists( 'path', $uriComponents )
			? null
			: new PathUriComponent( $uriComponents[ 'path' ] );
		$this->query    = false === array_key_exists( 'query', $uriComponents )
			? null
			: new QueryUriComponent( $uriComponents[ 'query' ] );
		$this->fragment = false === array_key_exists( 'fragment', $uriComponents )
			? null
			: new FragmentUriComponent( $uriComponents[ 'fragment' ] );
	}

	/**
	 * @inheritDoc
	 */
	public function getScheme(): ?SchemeUriComponentInterface
	{
		return $this->scheme;
	}

	/**
	 * @inheritDoc
	 */
	public function getUsername(): ?UsernameUriComponentInterface
	{
		return $this->username;
	}

	/**
	 * @inheritDoc
	 */
	public function getPassword(): ?PasswordUriComponentInterface
	{
		return $this->password;
	}

	/**
	 * @inheritDoc
	 */
	public function getHost(): ?HostUriComponentInterface
	{
		return $this->host;
	}

	/**
	 * @inheritDoc
	 */
	public function getPort(): ?PortUriComponentInterface
	{
		return $this->port;
	}

	/**
	 * @inheritDoc
	 */
	public function getPath(): ?PathUriComponentInterface
	{
		return $this->path;
	}

	/**
	 * @inheritDoc
	 */
	public function getQuery(): ?QueryUriComponentInterface
	{
		return $this->query;
	}

	/**
	 * @inheritDoc
	 */
	public function getFragment(): ?FragmentUriComponentInterface
	{
		return $this->fragment;
	}
}
