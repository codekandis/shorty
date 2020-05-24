<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use function get_resource_type;
use function is_resource;
use function sprintf;

/**
 * Represents the base class of all wrapped `resource` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractResource extends AbstractObject implements ResourceInterface
{
	/**
	 * Represents the error message if the value is not a `resource`.
	 * @var string
	 */
	public const ERROR_VALUE_IS_NOT_A_RESOURCE = 'The value is not a `resource`.';

	/**
	 * Stores the value of the wrapped `resource`.
	 * @var resource
	 */
	protected $value;

	/**
	 * Constructor method.
	 * @param resource $value The `resource` value to wrap.
	 * @throws ValueIsNotAResourceException The value is not a resource.
	 */
	public function __construct( $value )
	{
		if ( false === is_resource( $value ) )
		{
			throw new ValueIsNotAResourceException( static::ERROR_VALUE_IS_NOT_A_RESOURCE );
		}

		$this->value = $value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromResource( ResourceInterface $value ): ResourceInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
		return sprintf(
			'resource(%s)',
			get_resource_type( $this->value )
		);
	}
}
