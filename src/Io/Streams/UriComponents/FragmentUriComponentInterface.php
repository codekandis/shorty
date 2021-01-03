<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams\UriComponents;

use CodeKandis\Shorty\Types\Wrapped\StringInterface;

/**
 * Represents the interface of all fragment URI components.
 * @package codekandis/shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
interface FragmentUriComponentInterface extends StringInterface
{
	/**
	 * Creates a wrapped fragment URI component from another wrapped fragment URI component.
	 * @param FragmentUriComponentInterface $value The wrapped fragment URI component to base the new wrapped fragment URI component on.
	 * @return FragmentUriComponentInterface The new wrapped fragment URI component.
	 */
	public static function fromFragmentUriComponent( FragmentUriComponentInterface $value ): FragmentUriComponentInterface;

	/**
	 * @inheritDoc
	 * Gets the value of the wrapped fragment URI component.
	 * @return string The value of the wrapped fragment URI component.
	 */
	public function getValue(): string;

	/**
	 * @inheritDoc
	 * Converts the value of the wrapped fragment URI component into its `string` representation.
	 * @return string The `string` representation.
	 */
	public function toString(): string;
}
