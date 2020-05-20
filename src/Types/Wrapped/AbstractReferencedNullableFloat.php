<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;

/**
 * Represents the base class of all wrapped referenced `nullable float` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
abstract class AbstractReferencedNullableFloat extends AbstractObject implements ReferencedNullableFloatInterface
{
	/**
	 * Stores the value of the wrapped referenced `nullable float`.
	 * @var null|float
	 * @SerializationPropertyAttribute()
	 */
	protected ?float $value;

	/**
	 * Constructor method.
	 * @param null|float $value The `nullable float` value to wrap.
	 */
	public function __construct( ?float &$value = null )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedNullableFloat( ReferencedNullableFloatInterface $value ): ReferencedNullableFloatInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): ?float
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
