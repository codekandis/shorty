<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization;

/**
 * Represents an exception if a class is not marked as a serialization contract.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class NotASerializationContractException extends SerializerException
{
}
