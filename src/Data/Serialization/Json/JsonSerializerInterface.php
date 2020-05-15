<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization\Json;

use CodeKandis\Shorty\Data\Serialization\SerializationFailedException;

/**
 * Represents the interface of all JSON serializers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonSerializerInterface
{
	/**
	 * Serializes an object into a JSON string.
	 * @param mixed $data The object to serialize.
	 * @return string The serialized JSON string.
	 * @throws SerializationFailedException The serialization failed.
	 */
	public function serialize( $data ): string;
}
