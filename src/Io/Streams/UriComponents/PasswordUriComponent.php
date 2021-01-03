<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents a password URI component.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class PasswordUriComponent extends AbstractString implements PasswordUriComponentInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromPasswordUriComponent( PasswordUriComponentInterface $value ): PasswordUriComponentInterface
	{
		return new static( $value->getValue() );
	}
}
