<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents a query URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class QueryUriComponent extends AbstractString implements QueryUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromQueryUriComponent( QueryUriComponentInterface $value ): QueryUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
