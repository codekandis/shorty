<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\ValueIsInvalidException;

/**
 * Represents an exception if a value is not a `resource`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotAResourceException extends ValueIsInvalidException
{
}