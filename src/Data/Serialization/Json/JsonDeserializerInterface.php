<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization\Json;

use CodeKandis\Shorty\Data\Serialization\DeserializationFailedException;

/**
 * Represents the interface of all JSON deserializers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonDeserializerInterface
{
	/**
	 * Deserializes a JSON string into an object.
	 * @param string $data The JSON string to deserialize.
	 * @param string $class The class name to deserialize into.
	 * @return object The deserialized object.
	 * @throws DeserializationFailedException The deserialization failed.
	 */
	public function deserialize( string $data, string $class ): object;
}
