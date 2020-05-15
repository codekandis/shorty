<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization;

use CodeKandis\Shorty\Annotations\AbstractPropertyAttribute;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Represents a serialization property attribute to mark a property as serializable.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @Annotation
 * @Target("PROPERTY")
 */
class SerializationPropertyAttribute extends AbstractPropertyAttribute
{
	/**
	 * Stores the name of the serialization property to serialize.
	 * @var string
	 */
	public string $name = '';

	/**
	 * Stores the type of the serialization property to serialize.
	 * @var string
	 */
	public string $type = '';
}
