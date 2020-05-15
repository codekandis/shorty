<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization;

/**
 * Represents an exception if a serialization contract class has no properties marked as serialization contract property.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class SerializationContractHasNoPropertiesException extends SerializerException
{
}
