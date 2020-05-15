<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization;

use CodeKandis\Shorty\Annotations\AbstractPropertyAttribute;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Represents a serialization attribute attribute to mark an attribute as serializable.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @Annotation
 * @Target("PROPERTY")
 */
class SerializationAttributeAttribute extends AbstractPropertyAttribute
{
	/**
	 * Stores the type of the serialization attribute to serialize.
	 * @var string
	 */
	public string $type = '';

	/**
	 * Stores the name of the serialization attribute to serialize.
	 * @var string
	 */
	public string $name = '';
}
