<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;

/**
 * Represents the base class of all wrapped `int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute()
 */
abstract class AbstractInt extends AbstractObject implements IntInterface
{
	/**
	 * Stores the value of the wrapped `int`.
	 * @var int
	 * @SerializationPropertyAttribute()
	 */
	protected int $value;

	/**
	 * Constructor method.
	 * @param int $value The `int` value to wrap.
	 */
	public function __construct( int $value = 0 )
	{
		$this->value = $value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromInt( IntInterface $value ): IntInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getValue(): int
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
