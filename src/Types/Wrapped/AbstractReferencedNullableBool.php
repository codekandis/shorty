<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;

/**
 * Represents the base class of all wrapped referenced `nullable bool` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractReferencedNullableBool extends AbstractObject implements ReferencedNullableBoolInterface
{
	/**
	 * Stores the value of the wrapped referenced `nullable bool`.
	 * @var null|bool
	 */
	protected ?bool $value;

	/**
	 * Constructor method.
	 * @param null|bool $value The `nullable bool` value to wrap.
	 */
	public function __construct( ?bool &$value = null )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedNullableBool( ReferencedNullableBoolInterface $value ): ReferencedNullableBoolInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): ?bool
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
