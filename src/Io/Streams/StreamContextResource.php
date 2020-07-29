<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractResource;
use function get_resource_type;
use function is_resource;

/**
 * Represents a wrapped `stream context resource` type.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class StreamContextResource extends AbstractResource implements StreamContextResourceInterface
{
	/**
	 * Represents the error message if a resource is not a `stream context resource`.
	 * @var string
	 */
	public const ERROR_RESOURCE_IS_NOT_A_STREAM = 'The resource is not a `stream context resource`.';

	/**
	 * Constructor method.
	 * @param resource $value The `stream context resource` value to wrap.
	 * @throws ValueIsNotAStreamContextResourceException The passed value is not a `stream context resource`.
	 */
	public function __construct( $value )
	{
		if ( false === is_resource( $value ) || 'stream-context' !== get_resource_type( $value ) )
		{
			throw new ValueIsNotAStreamContextResourceException( static::ERROR_RESOURCE_IS_NOT_A_STREAM );
		}

		parent::__construct( $value );
	}

	/**
	 * @inheritDoc
	 */
	public static function fromStreamContextResource( StreamContextResourceInterface $value ): StreamContextResourceInterface
	{
		return new static( $value->getValue() );
	}
}
