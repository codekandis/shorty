<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use function array_filter;
use function implode;
use function preg_replace;
use function preg_split;
use function var_export;

/**
 * Represents the base class of all wrapped referenced `nullable array` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractReferencedNullableArray extends AbstractObject implements ReferencedNullableArrayInterface
{
	/**
	 * Stores the value of the wrapped referenced `nullable array`.
	 * @var null|array
	 */
	protected ?array $value;

	/**
	 * Constructor method.
	 * @param null|array $value The `nullable array` value to wrap.
	 */
	public function __construct( ?array &$value = null )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedNullableArray( ReferencedNullableArrayInterface $value ): ReferencedNullableArrayInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): ?array
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

		$preparedValue = var_export( $this->value, true );
		$preparedValue = preg_replace( '~^( *)(.*)~m', '$1$2', $preparedValue );
		$preparedValue = preg_split( '~\r\n|\n|\r~', $preparedValue );
		$preparedValue = preg_replace(
			[
				'~^ *array \($~',
				'~\)(,)?$~',
				'~^( *)(.*) => $~'
			],
			[
				null,
				']',
				"$1$2 =>\n$1["
			],
			$preparedValue
		);

		return implode( "\n", array_filter( [ '[' ] + $preparedValue ) );
	}
}