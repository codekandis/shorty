<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types;

use CodeKandis\Shorty\Types\Wrapped\AbstractReferencedArray;
use function array_key_exists;
use function count;
use function sprintf;

/**
 * Represents an array accessor managing an array by reference.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class ReferencedArrayAccessor extends AbstractReferencedArray implements ReferencedArrayAccessorInterface
{
	/**
	 * Represents the error message if a key is out of bounds while the array contains no elements.
	 * @var string
	 */
	protected const ERROR_ARRAY_CONTAINS_NO_ELEMENTS = 'The key \'%d\' is out of bounds: The array contains no elements.';

	/**
	 * Represents the error message if a key is out of bounds.
	 * @var string
	 */
	protected const ERROR_KEY_IS_OUT_OF_BOUNDS = 'The key \'%d\' is out of bounds.';

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedArrayAccessor( ReferencedArrayAccessorInterface $value ): ReferencedArrayAccessorInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function has( string $key ): bool
	{
		return array_key_exists( $key, $this->value );
	}

	/**
	 * @inheritDoc
	 */
	public function get( string $key )
	{
		if ( 0 === count( $this->value ) )
		{
			throw new KeyIsOutOfBoundsException(
				sprintf(
					static::ERROR_ARRAY_CONTAINS_NO_ELEMENTS,
					$key
				)
			);
		}
		if ( false === array_key_exists( $key, $this->value ) )
		{
			throw new KeyIsOutOfBoundsException(
				sprintf(
					static::ERROR_KEY_IS_OUT_OF_BOUNDS,
					$key
				)
			);
		}

		return $this->value[ $key ];
	}

	/**
	 * @inheritDoc
	 */
	public function getDefaulted( string $key, $default )
	{
		return false === array_key_exists( $key, $this->value ) ? $default : $this->value[ $key ];
	}

	/**
	 * @inheritDoc
	 */
	public function set( string $key, $value ): void
	{
		$this->value[ $key ] = $value;
	}

	/**
	 * @inheritDoc
	 */
	public function delete( string $key ): void
	{
		if ( 0 === count( $this->value ) )
		{
			throw new KeyIsOutOfBoundsException(
				sprintf(
					static::ERROR_ARRAY_CONTAINS_NO_ELEMENTS,
					$key
				)
			);
		}
		if ( false === array_key_exists( $key, $this->value ) )
		{
			throw new KeyIsOutOfBoundsException(
				sprintf(
					static::ERROR_KEY_IS_OUT_OF_BOUNDS,
					$key
				)
			);
		}

		unset ( $this->value[ $key ] );
	}
}
