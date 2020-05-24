<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use function get_resource_type;
use function is_resource;
use function sprintf;

/**
 * Represents the base class of all wrapped referenced `nullable resource` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractReferencedNullableResource extends AbstractObject implements ReferencedNullableResourceInterface
{
	/**
	 * Represents the error message if the value is not a `resource`.
	 * @var string
	 */
	public const ERROR_VALUE_IS_NOT_A_NULLABLE_RESOURCE = 'The value is not a nullable `resource`.';

	/**
	 * Stores the value of the wrapped referenced `nullable resource`.
	 * @var null|resource
	 */
	protected $value;

	/**
	 * Constructor method.
	 * @param null|resource $value The `nullable resource` value to wrap.
	 */
	public function __construct( &$value = null )
	{
		if ( null !== $value && false === is_resource( $value ) )
		{
			throw new ValueIsNotANullableResourceException( static::ERROR_VALUE_IS_NOT_A_NULLABLE_RESOURCE );
		}

		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedNullableResource( ReferencedNullableResourceInterface $value ): ReferencedNullableResourceInterface
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
		return null === $this->value
			? 'null'
			: sprintf(
				'resource(%s)',
				get_resource_type( $this->value )
			);
	}
}
