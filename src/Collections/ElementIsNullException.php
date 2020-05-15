<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Collections;

use CodeKandis\Shorty\ValueIsNullException;

/**
 * Represents an exception if the value of an element is `null`.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ElementIsNullException extends ValueIsNullException
{
}
