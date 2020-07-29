<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Types\Wrapped\ValueIsNotAResourceException;

/**
 * Represents an exception if a value is not a `stream context resource`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotAStreamContextResourceException extends ValueIsNotAResourceException
{
}
