<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Annotations;

use CodeKandis\Shorty\RuntimeException;

/**
 * Represents an exception if an annotation reader cannot be instantiated.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class AnnotationReaderInstantiationFailedException extends RuntimeException
{
}
