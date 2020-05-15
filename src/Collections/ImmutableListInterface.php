<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Collections;

use CodeKandis\Shorty\ArrayableInterface;
use CodeKandis\Shorty\RecursivelyArrayableInterface;
use CodeKandis\Shorty\Utilities\Converters\OneWayConverterInterface;
use CodeKandis\Shorty\Utilities\Predictors\PredictorInterface;
use Countable;
use Iterator;

/**
 * Represents the interface of all immutable lists.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ImmutableListInterface extends Countable, Iterator, ArrayableInterface, RecursivelyArrayableInterface
{
	/**
	 * @inheritDoc
	 * Gets the number of elements of the list.
	 * @return int The number of elements of the list.
	 */
	public function count(): int;

	/**
	 * @inheritDoc
	 * Gets the current element of the list.
	 * @return mixed The current element of the list.
	 */
	public function current();

	/**
	 * @inheritDoc
	 * Sets the pointer of the list to the next element if it is not set on the last element.
	 */
	public function next(): void;

	/**
	 * @inheritDoc
	 * Gets the zero-based index of the current element of the list.
	 * @return int The zero-based index of the current element of the list.
	 */
	public function key(): int;

	/**
	 * @inheritDoc
	 * Sets the pointer of the list to the first element.
	 */
	public function rewind(): void;

	/**
	 * @inheritDoc
	 * Determines if there is an element right at the position of the pointer in the list.
	 * @return bool `true` if there is an element right at the position of the pointer in the list, `false` otherwise.
	 */
	public function valid(): bool;

	/**
	 * @inheritDoc
	 * Converts the list into its `array` representation.
	 * @return array The list converted into its `array` representation.
	 */
	public function toArray(): array;

	/**
	 * @inheritDoc
	 * Converts the list recursively into its `array` representation.
	 * @return array The list recursively converted into its `array` representation.
	 */
	public function toRecursiveArray(): array;

	/**
	 * Determines if the list already contains a passed element.
	 * @param mixed $element The element to check if it already exists in the list.
	 * @return bool `true` if the list already contains the passed element, `false` otherwise.
	 * @throws ElementIsNullException The value of the element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 */
	public function contains( $element ): bool;

	/**
	 * Determines the zero-based index of a passed element.
	 * @param mixed $element The element to determine its zero-based index.
	 * @return null|int The zero-based index of the element if it exists, `null` otherwise.
	 * @throws ElementIsNullException The value of the element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 */
	public function indexOf( $element ): ?int;

	/**
	 * Gets an element of the list by its zero-based index.
	 * @param int $index The zero-based index of the element to get.
	 * @return mixed The element of the list at the specified index.
	 * @throws IndexIsOutOfBoundsException The index is out of bounds. The list contains no elements.
	 * @throws IndexIsOutOfBoundsException The index is out of bounds.
	 */
	public function elementAt( int $index );

	/**
	 * Gets the first element of the list matching a passed predicate.
	 * @param PredictorInterface $predictor The predicate defining which element to find.
	 * @return null|mixed The first element matching the passed predicate, `null` otherwise.
	 */
	public function find( PredictorInterface $predictor );

	/**
	 * Gets a list of elements of the list matching a passed predicate.
	 * @param PredictorInterface $predictor The predicate defining which elements to find.
	 * @return self The list of elements matching the passed predicate.
	 */
	public function findAll( PredictorInterface $predictor ): self;

	/**
	 * Gets a new list of all elements converted by a passed converter.
	 * @param OneWayConverterInterface $converter The converter to convert all elements.
	 * @return self The new list of elements.
	 */
	public function convert( OneWayConverterInterface $converter ): self;
}
