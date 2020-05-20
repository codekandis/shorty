<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;

/**
 * Represents the base class of all wrapped referenced `string` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
abstract class AbstractReferencedString extends AbstractObject implements ReferencedStringInterface
{
	/**
	 * Stores the value of the wrapped referenced `string`.
	 * @var string
	 * @SerializationPropertyAttribute()
	 */
	protected string $value;

	/**
	 * Constructor method.
	 * @param string $value The referenced `string` value to wrap.
	 */
	public function __construct( string &$value = '' )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedString( ReferencedStringInterface $value ): ReferencedStringInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): string
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		return $this->value;
	}
}
