<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents an username URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class UsernameUriComponent extends AbstractString implements UsernameUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromUsernameUriComponent( UsernameUriComponentInterface $value ): UsernameUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
