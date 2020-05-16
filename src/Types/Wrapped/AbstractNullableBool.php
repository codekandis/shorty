<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;

/**
 * Represents the base class of all wrapped `nullable bool` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute()
 */
abstract class AbstractNullableBool extends AbstractObject implements NullableBoolInterface
{
	/**
	 * Stores the value of the wrapped `nullable bool`.
	 * @var null|bool
	 * @SerializationPropertyAttribute()
	 */
	private ?bool $value;

	/**
	 * Constructor method.
	 * @param null|bool $value The `nullable bool` value to wrap.
	 */
	public function __construct( ?bool $value = null )
	{
		$this->value = $value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromNullableBool( NullableBoolInterface $value ): NullableBoolInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getValue(): ?bool
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		if ( null === $this->value )
		{
			return 'null';
		}

		return false === $this->value ? 'false' : 'true';
	}
}
