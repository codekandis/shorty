<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\StringifyableInterface;

/**
 * Represents the interface of all wrapped types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface WrappedTypeInterface extends StringifyableInterface
{
	/**
	 * @inheritDoc
	 * Converts the value of the wrapped type into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
