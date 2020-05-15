<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Text;

use CodeKandis\Shorty\Types\Wrapped\AbstractString;
use function mb_convert_encoding;
use function mb_strlen;

/**
 * Represents a `string` container providing character encoding safe operations.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringContainer extends AbstractString implements StringContainerInterface
{
	/**
	 * Stores the character encoding of the `string` container.
	 * @var EncodingInterface
	 */
	private EncodingInterface $encoding;

	/**
	 * Constructor method.
	 * @param string $value The `string` value to wrap.
	 * @param null|EncodingInterface $encoding The character encoding of the value. If omitted the default encoding will be used.
	 */
	public function __construct( string $value = '', ?EncodingInterface $encoding = null )
	{
		parent::__construct( $value );

		$this->encoding = $encoding ?? new Encoding();
	}

	/**
	 * @inheritDoc
	 */
	public static function fromStringContainer( StringContainerInterface $value, ?EncodingInterface $encoding = null ): StringContainerInterface
	{
		$encoding        = $encoding ?? $value->getEncoding();
		$transcodedValue = $encoding->getValue() !== $value->getValue()
			? mb_convert_encoding(
				$value->getValue(),
				$encoding->getValue(),
				$value->getEncoding()->getValue()
			)
			: $value;

		return new static( $transcodedValue, $encoding );
	}

	/**
	 * @inheritDoc
	 */
	public function getEncoding(): EncodingInterface
	{
		return $this->encoding;
	}

	/**
	 * @inheritDoc
	 */
	public function getLength(): int
	{
		return mb_strlen( $this->value, $this->encoding->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function add( string $value, ?EncodingInterface $encoding = null ): void
	{
		$encoding    = $encoding ?? new Encoding();
		$this->value .= mb_convert_encoding(
			$value,
			$this->encoding->getValue(),
			$encoding->getValue()
		);
	}

	/**
	 * @inheritDoc
	 */
	public function addContainer( StringContainerInterface $container ): void
	{
		$this->value .= mb_convert_encoding(
			$container->getValue(),
			$this->encoding->getValue(),
			$container->getEncoding()->getValue()
		);
	}
}
