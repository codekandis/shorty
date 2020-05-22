<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Types\Wrapped;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Data\Serialization\SerializationPropertyAttribute;
use function array_filter;
use function implode;
use function preg_replace;
use function preg_split;
use function var_export;

/**
 * Represents the base class of all wrapped referenced `array` types.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
abstract class AbstractReferencedArray extends AbstractObject implements ReferencedArrayInterface
{
	/**
	 * Stores the value of the wrapped referenced `array`.
	 * @var array
	 * @SerializationPropertyAttribute()
	 */
	protected array $value;

	/**
	 * Constructor method.
	 * @param array $value The `array` value to wrap.
	 */
	public function __construct( array &$value = [] )
	{
		$this->value = &$value;
	}

	/**
	 * @inheritDoc
	 */
	public static function fromReferencedArray( ReferencedArrayInterface $value ): ReferencedArrayInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function &getValue(): array
	{
		return $this->value;
	}

	/**
	 * @inheritDoc
	 */
	public function toString(): string
	{
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
