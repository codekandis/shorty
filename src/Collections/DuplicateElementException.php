<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Collections;

use CodeKandis\Shorty\ValueIsInvalidException;

/**
 * Represents an exception if an element already exists.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateElementException extends ValueIsInvalidException
{
}
