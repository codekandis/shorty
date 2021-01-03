<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents a scheme URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class SchemeUriComponent extends AbstractString implements SchemeUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromSchemeUriComponent( SchemeUriComponentInterface $value ): SchemeUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
