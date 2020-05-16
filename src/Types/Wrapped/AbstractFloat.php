<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;

/**
 * Represents the base class of all wrapped `float` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute()
 */
abstract class AbstractFloat extends AbstractObject implements FloatInterface
{
	/**
	 * Stores the value of the wrapped `float`.
	 * @var float
	 * @SerializationPropertyAttribute()
	 */
	protected float $value;

	/**
	 * Constructor method.
	 * @param float $value The `float` value to wrap.
	 */
	public function __construct( float $value = 0 )
	{
		$this->value = $value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromFloat( FloatInterface $value ): FloatInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getValue(): float
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		return (string) $this->value;
	}
}
