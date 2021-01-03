<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents a path URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class PathUriComponent extends AbstractString implements PathUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromPathUriComponent( PathUriComponentInterface $value ): PathUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
