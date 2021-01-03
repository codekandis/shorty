<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents a host URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class HostUriComponent extends AbstractString implements HostUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromHostUriComponent( HostUriComponentInterface $value ): HostUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
