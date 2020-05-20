<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;

/**
 * Represents the base class of all wrapped referenced `int` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractReferencedInt extends AbstractObject implements ReferencedIntInterface
{
	/**
	 * Stores the value of the wrapped referenced `int`.
	 * @var int
	 */
	protected int $value;

	/**
	 * Constructor method.
	 * @param int $value The `int` value to wrap.
	 */
	public function __construct( int &$value = 0 )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedInt( ReferencedIntInterface $value ): ReferencedIntInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): int
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
