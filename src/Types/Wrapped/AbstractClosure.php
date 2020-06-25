<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use Closure;
use CodeKandis\Shorty\AbstractObject;
use function get_class;

/**
 * Represents the base class of all wrapped `Closure` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractClosure extends AbstractObject implements ClosureInterface
{
	/**
	 * Stores the value of the wrapped `Closure`.
	 * @var Closure
	 */
	protected Closure $value;

	/**
	 * Constructor method.
	 * @param Closure $value The `Closure` value to wrap.
	 */
	public function __construct( Closure $value )
	{
		$this->value = $value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromClosure( ClosureInterface $value ): ClosureInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getValue(): Closure
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		return get_class( $this->value );
	}
}
