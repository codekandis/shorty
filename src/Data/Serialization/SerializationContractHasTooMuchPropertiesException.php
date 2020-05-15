<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization;

/**
 * Represents an exception if a serialization contract class has too much properties marked as serialization contract property.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class SerializationContractHasTooMuchPropertiesException extends SerializerException
{
}
