<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractResource;
use function get_resource_type;
use function is_resource;

/**
 * Represents a wrapped `stream resource` type.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class StreamResource extends AbstractResource implements StreamResourceInterface
{
	/**
	 * Represents the error message if a resource is not a `stream resource`.
	 * @var string
	 */
	public const ERROR_RESOURCE_IS_NOT_A_STREAM = 'The resource is not a `stream resource`.';

	/**
	 * Constructor method.
	 * @param resource $value The `stream resource` value to wrap.
	 * @throws ValueIsNotAStreamResourceException The passed value is not a `stream resource`.
	 */
	public function __construct( $value )
	{
		if ( false === is_resource( $value ) || 'stream' !== get_resource_type( $value ) )
		{
			throw new ValueIsNotAStreamResourceException( static::ERROR_RESOURCE_IS_NOT_A_STREAM );
		}

		parent::__construct( $value );
	}

	/**
	 * @inheritDoc
	 */
	public static function fromStreamResource( StreamResourceInterface $value ): StreamResourceInterface
	{
		return new static( $value->getValue() );
	}
}
