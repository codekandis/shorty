<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Collections;

use CodeKandis\Shorty\ArrayableInterface;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;
use CodeKandis\Shorty\RecursivelyArrayableInterface;
use CodeKandis\Shorty\Utilities\Converters\OneWayConverterInterface;
use CodeKandis\Shorty\Utilities\Predictors\PredictorInterface;
use CodeKandis\Shorty\Utilities\Validators\ValidatorInterface;
use function array_key_exists;
use function array_merge;
use function array_search;
use function array_slice;
use function count;
use function get_class;
use function in_array;
use function sprintf;

/**
 * Represents a mutable list of elements. A set contains unique elements.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class Set implements ListInterface
{
	/**
	 * Represents the error message if an element is `null`.
	 * @var string
	 */
	protected const ERROR_ELEMENT_VALUE_IS_NULL = 'The value of the element is `null`.';

	/**
	 * Represents the error message if an element did not pass the validation.
	 * @var string
	 */
	protected const ERROR_ELEMENT_IS_NOT_VALID = 'The element did not pass the validation of `%s`.';

	/**
	 * Represents the error message if an index is out of bounds while the list contains no elements.
	 * @var string
	 */
	protected const ERROR_LIST_CONTAINS_NO_ELEMENTS = 'The index \'%d\' is out of bounds: The list contains no elements.';

	/**
	 * Represents the error message if an index is out of bounds.
	 * @var string
	 */
	protected const ERROR_INDEX_IS_OUT_OF_BOUNDS = 'The index \'%d\' is out of bounds: [0..%d] expected.';

	/**
	 * Represents the error message if an element does not exist.
	 * @var string
	 */
	protected const ERROR_ELEMENT_NOT_FOUND = 'The element does not exist.';

	/**
	 * Represents the error message if an element already exists.
	 * @var string
	 */
	protected const ERROR_ELEMENT_ALREADY_EXISTS = 'The element has already been added.';

	/**
	 * Stores the position of the internal array pointer.
	 * @var int
	 */
	private int $position = 0;

	/**
	 * Stores the internal list of elements.
	 * @var array
	 * @SerializationPropertyAttribute()
	 */
	protected array $elements = [];

	/**
	 * Stores the element validator of the list.
	 * @var null|ValidatorInterface
	 */
	public ?ValidatorInterface $validator;

	/**
	 * Constructor method.
	 * @param null|ValidatorInterface $validator The initial elements.
	 * @param iterable $elements The initial elements.
	 * @throws ElementIsNullException The value of the element is `null`.
	 * @throws ElementIsNotValidException The element did not pass the validation.
	 * @throws DuplicateElementException The element has already been added.
	 */
	public function __construct( ?ValidatorInterface $validator = null, iterable $elements = [] )
	{
		$this->validator = $validator;

		foreach ( $elements as $element )
		{
			$this->add( $element );
		}
	}

	/**
	 * @inheritDoc
	 */
	public function count(): int
	{
		return count( $this->elements );
	}

	/**
	 * @inheritDoc
	 */
	public function current()
	{
		return $this->elements[ $this->position ];
	}

	/**
	 * @inheritDoc
	 */
	public function next(): void
	{
		$this->position++;
	}

	/**
	 * @inheritDoc
	 */
	public function key(): int
	{
		return $this->position;
	}

	/**
	 * @inheritDoc
	 */
	public function rewind(): void
	{
		$this->position = 0;
	}

	/**
	 * @inheritDoc
	 */
	public function valid(): bool
	{
		return $this->position < count( $this->elements );
	}

	/**
	 * @inheritDoc
	 */
	public function toArray(): array
	{
		return $this->elements;
	}

	/**
	 * @inheritDoc
	 */
	public function toRecursiveArray(): array
	{
		$transformedElements = [];
		foreach ( $transformedElements as $element )
		{
			if ( $element instanceof RecursivelyArrayableInterface )
			{
				$transformedElements[] = $element->toRecursiveArray();
				continue;
			}
			if ( $element instanceof ArrayableInterface )
			{
				$transformedElements[] = $element->toArray();
				continue;
			}
			$transformedElements[] = $element;
		}

		return $transformedElements;
	}

	/**
	 * @inheritDoc
	 */
	public function contains( $element ): bool
	{
		if ( null === $element )
		{
			throw new ElementIsNullException( static::ERROR_ELEMENT_VALUE_IS_NULL );
		}
		if ( null !== $this->validator && false === $this->validator->validate( $element ) )
		{
			throw new ElementIsNotValidException(
				sprintf(
					self::ERROR_ELEMENT_IS_NOT_VALID,
					get_class( $this->validator )
				)
			);
		}

		return in_array( $element, $this->elements, true );
	}

	/**
	 * @inheritDoc
	 */
	public function indexOf( $element ): ?int
	{
		if ( null === $element )
		{
			throw new ElementIsNullException( static::ERROR_ELEMENT_VALUE_IS_NULL );
		}
		if ( null !== $this->validator && false === $this->validator->validate( $element ) )
		{
			throw new ElementIsNotValidException(
				sprintf(
					self::ERROR_ELEMENT_IS_NOT_VALID,
					get_class( $this->validator )
				)
			);
		}

		$index = array_search( $element, $this->elements, true );

		return false === $index ? null : $index;
	}

	/**
	 * @inheritDoc
	 */
	public function elementAt( int $index )
	{
		$count = count( $this->elements );
		if ( 0 === $count )
		{
			throw new IndexIsOutOfBoundsException(
				sprintf(
					static::ERROR_LIST_CONTAINS_NO_ELEMENTS,
					$index
				)
			);
		}
		if ( false === array_key_exists( $index, $this->elements ) )
		{
			throw new IndexIsOutOfBoundsException(
				sprintf(
					static::ERROR_INDEX_IS_OUT_OF_BOUNDS,
					$index,
					$count - 1
				)
			);
		}

		return $this->elements[ $index ];
	}

	/**
	 * @inheritDoc
	 */
	public function find( PredictorInterface $predictor )
	{
		foreach ( $this->elements as $element )
		{
			if ( true === $predictor->predict( $element ) )
			{
				return $element;
			}
		}

		return null;
	}

	/**
	 * @inheritDoc
	 */
	public function findAll( PredictorInterface $predictor ): self
	{
		$elementsFound = [];
		foreach ( $this->elements as $element )
		{
			if ( true === $predictor->predict( $element ) )
			{
				$elementsFound[] = $element;
			}
		}

		return new static( $this->validator, $elementsFound );
	}

	/**
	 * @inheritDoc
	 */
	public function convert( OneWayConverterInterface $converter ): self
	{
		$elementsConverted = [];
		foreach ( $this->elements as $element )
		{
			$elementsConverted[] = $converter->convert( $element );
		}

		return new static( $this->validator, $elementsConverted );
	}

	/**
	 * @inheritDoc
	 * @throws DuplicateElementException The element has already been added.
	 */
	public function add( $element ): void
	{
		if ( null === $element )
		{
			throw new ElementIsNullException( static::ERROR_ELEMENT_VALUE_IS_NULL );
		}
		if ( null !== $this->validator && false === $this->validator->validate( $element ) )
		{
			throw new ElementIsNotValidException(
				sprintf(
					self::ERROR_ELEMENT_IS_NOT_VALID,
					get_class( $this->validator )
				)
			);
		}
		if ( true === in_array( $element, $this->elements ) )
		{
			throw new DuplicateElementException( static::ERROR_ELEMENT_ALREADY_EXISTS );
		}

		$this->elements[] = $element;
	}

	/**
	 * @inheritDoc
	 * @throws DuplicateElementException The element has already been added.
	 */
	public function insert( int $index, $element ): void
	{
		if ( false === array_key_exists( $index, $this->elements ) )
		{
			throw new IndexIsOutOfBoundsException(
				sprintf(
					static::ERROR_INDEX_IS_OUT_OF_BOUNDS,
					$index,
					count( $this->elements ) - 1
				)
			);
		}
		if ( null === $element )
		{
			throw new ElementIsNullException( static::ERROR_ELEMENT_VALUE_IS_NULL );
		}
		if ( null !== $this->validator && false === $this->validator->validate( $element ) )
		{
			throw new ElementIsNotValidException(
				sprintf(
					self::ERROR_ELEMENT_IS_NOT_VALID,
					get_class( $this->validator )
				)
			);
		}
		if ( true === in_array( $element, $this->elements ) )
		{
			throw new DuplicateElementException( static::ERROR_ELEMENT_ALREADY_EXISTS );
		}

		array_merge(
			array_slice( $this->elements, 0, $index ),
			[
				$element
			],
			array_slice( $this->elements, $index )
		);
	}

	/**
	 * @inheritDoc
	 * @throws DuplicateElementException The element has already been added.
	 */
	public function delete( $element ): void
	{
		if ( null === $element )
		{
			throw new ElementIsNullException( static::ERROR_ELEMENT_VALUE_IS_NULL );
		}
		if ( null !== $this->validator && false === $this->validator->validate( $element ) )
		{
			throw new ElementIsNotValidException(
				sprintf(
					self::ERROR_ELEMENT_IS_NOT_VALID,
					get_class( $this->validator )
				)
			);
		}
		$index = array_search( $element, $this->elements, true );
		if ( false === $index )
		{
			throw new ElementNotFoundException( static::ERROR_ELEMENT_NOT_FOUND );
		}

		array_merge(
			array_slice( $this->elements, 0, $index ),
			array_slice( $this->elements, $index + 1 )
		);
	}
}
