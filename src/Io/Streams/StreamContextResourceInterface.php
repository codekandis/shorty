<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Types\Wrapped\ResourceInterface;

/**
 * Represents a wrapped `stream context resource` type.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StreamContextResourceInterface extends ResourceInterface
{
	/**
	 * Creates a wrapped `stream context resource` from another wrapped `stream context resource`.
	 * @param StreamContextResourceInterface $value The wrapped `stream context resource` to base the new wrapped `stream context resource` on.
	 * @return StreamContextResourceInterface The new wrapped `stream context resource`.
	 * @throws ValueIsNotAStreamContextResourceException The value is not a `stream context resource`.
	 */
	public static function fromStreamContextResource( StreamContextResourceInterface $value ): StreamContextResourceInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped `stream context resource`.
	 * @return resource The value of the wrapped `stream context resource`.
	 */
	public function getValue();

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `stream context resource` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
