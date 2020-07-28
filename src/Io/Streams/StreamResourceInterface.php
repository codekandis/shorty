<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Types\Wrapped\ResourceInterface;

/**
 * Represents a wrapped `stream resource` type.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StreamResourceInterface extends ResourceInterface
{
	/**
	 * Creates a wrapped `stream resource` from another wrapped `stream resource`.
	 * @param StreamResourceInterface $value The wrapped `stream resource` to base the new wrapped `stream resource` on.
	 * @return StreamResourceInterface The new wrapped `stream resource`.
	 * @throws ValueIsNotAStreamResourceException The value is not a `stream resource`.
	 */
	public static function fromStreamResource( StreamResourceInterface $value ): StreamResourceInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped `stream resource`.
	 * @return resource The value of the wrapped `stream resource`.
	 */
	public function getValue();

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped `stream resource` into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
