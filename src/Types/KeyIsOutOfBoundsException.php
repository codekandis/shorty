<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types;

use CodeKandis\Shorty\IndexIsInvalidException;

/**
 * Represents an exception if a key is out of bounds.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class KeyIsOutOfBoundsException extends IndexIsInvalidException
{
}
