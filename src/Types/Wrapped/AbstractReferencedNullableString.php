<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;

/**
 * Represents the base class of all wrapped referenced `nullable string` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractReferencedNullableString extends AbstractObject implements ReferencedNullableStringInterface
{
	/**
	 * Stores the value of the wrapped referenced `nullable string`.
	 * @var null|string
	 */
	protected ?string $value;

	/**
	 * Constructor method.
	 * @param null|string $value The referenced `nullable string` value to wrap.
	 */
	public function __construct( ?string &$value = null )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedNullableString( ReferencedNullableStringInterface $value ): ReferencedNullableStringInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): ?string
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		return $this->value
		       ?? 'null';
	}
}
