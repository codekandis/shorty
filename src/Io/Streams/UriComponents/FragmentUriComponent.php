<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents a fragment URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class FragmentUriComponent extends AbstractString implements FragmentUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromFragmentUriComponent( FragmentUriComponentInterface $value ): FragmentUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
