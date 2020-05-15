<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Annotations;

use CodeKandis\Shorty\AbstractObject;
use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Represents base class of all class attributes.
 * @package codekandis/shorty
 * @Annotation()
 * @Target("CLASS")
 */
abstract class AbstractClassAttribute extends AbstractObject
{
}
