<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use function get_resource_type;
use function is_resource;
use function sprintf;

/**
 * Represents the base class of all wrapped referenced `resource` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractReferencedResource extends AbstractObject implements ReferencedResourceInterface
{
	/**
	 * Represents the error message if the value is not a `resource`.
	 * @var string
	 */
	public const ERROR_VALUE_IS_NOT_A_RESOURCE = 'The value is not a `resource`.';

	/**
	 * Stores the value of the wrapped referenced `resource`.
	 * @var resource
	 */
	protected $value;

	/**
	 * Constructor method.
	 * @param resource $value The `resource` value to wrap.
	 */
	public function __construct( &$value )
	{
		if ( false === is_resource( $value ) )
		{
			throw new ValueIsNotAResourceException( static::ERROR_VALUE_IS_NOT_A_RESOURCE );
		}

		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedResource( ReferencedResourceInterface $value ): ReferencedResourceInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue()
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
