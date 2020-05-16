<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;

/**
 * Represents the base class of all wrapped `bool` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute()
 */
abstract class AbstractBool extends AbstractObject implements BoolInterface
{
	/**
	 * Stores the value of the wrapped `bool`.
	 * @var bool
	 * @SerializationPropertyAttribute()
	 */
	protected bool $value;

	/**
	 * Constructor method.
	 * @param bool $value The `bool` value to wrap.
	 */
	public function __construct( bool $value = false )
	{
		$this->value = $value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromBool( BoolInterface $value ): BoolInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getValue(): bool
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		return false === $this->value ? 'false' : 'true';
	}
}
