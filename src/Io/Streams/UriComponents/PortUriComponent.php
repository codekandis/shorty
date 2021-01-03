<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractInt;

/**
 * Represents a port URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class PortUriComponent extends AbstractInt implements PortUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromPortUriComponent( PortUriComponentInterface $value ): PortUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
