<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;

/**
 * Represents the base class of all wrapped `nullable int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute()
 */
abstract class AbstractNullableInt extends AbstractObject implements NullableIntInterface
{
	/**
	 * Stores the value of the wrapped `nullable int`.
	 * @var null|int
	 * @SerializationPropertyAttribute()
	 */
	protected ?int $value;

	/**
	 * Constructor method.
	 * @param null|int $value The `nullable int` value to wrap.
	 */
	public function __construct( ?int $value = null )
	{
		$this->value = $value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromNullableInt( NullableIntInterface $value ): NullableIntInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getValue(): ?int
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		return null === $this->value ? 'null' : (string) $this->value;
	}
}
