<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Collections;

/**
 * Represents the interface of all lists.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ListInterface extends ImmutableListInterface
{
	/**
	 * Adds an element to the list.
	 * @param mixed $element The element to add to the list.
	 * @throws ElementIsNullException The element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 */
	public function add( $element ): void;

	/**
	 * Inserts an element at a specified index
	 * @param int $index The index to insert the element at.
	 * @param mixed $element The element to insert.
	 * @throws IndexIsOutOfBoundsException The index is out of bounds. The list contains no elements.
	 * @throws IndexIsOutOfBoundsException The index is out of bounds.
	 * @throws ElementIsNullException The element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 */
	public function insert( int $index, $element ): void;

	/**
	 * Deletes an element from the list.
	 * @param mixed $element The element to delete.
	 * @throws ElementIsNullException The element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 * @throws ElementNotFoundException The element does not exist.
	 */
	public function delete( $element ): void;
}
