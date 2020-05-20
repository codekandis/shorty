<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;

/**
 * Represents the base class of all wrapped referenced `nullable int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractReferencedNullableInt extends AbstractObject implements ReferencedNullableIntInterface
{
	/**
	 * Stores the value of the wrapped referenced `nullable int`.
	 * @var null|int
	 */
	protected ?int $value;

	/**
	 * Constructor method.
	 * @param null|int $value The `nullable int` value to wrap.
	 */
	public function __construct( ?int &$value = null )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedNullableInt( ReferencedNullableIntInterface $value ): ReferencedNullableIntInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): ?int
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
