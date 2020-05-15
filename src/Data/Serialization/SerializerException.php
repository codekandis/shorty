<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization;

use CodeKandis\Shorty\LogicException;

/**
 * Represents an exception if an error occures during serialization or deserialization.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class SerializerException extends LogicException
{
}
