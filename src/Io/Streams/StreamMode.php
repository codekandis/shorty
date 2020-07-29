<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents the mode of how to access a stream.
 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class StreamMode extends AbstractString implements StreamModeInterface
{
	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const R = 'r';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const RP = 'r+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const RB = 'rb';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const RBP = 'rb+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const W = 'w';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const WP = 'w+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const WB = 'wb';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const WBP = 'wb+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const A = 'a';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const AP = 'a+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const AB = 'ab';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const ABP = 'ab+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const X = 'x';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const XP = 'x+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const XB = 'xb';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const XBP = 'xb+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const C = 'c';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const CP = 'c+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const CB = 'cb';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const CBP = 'cb+';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const E = 'e';

	/**
	 * @see https://www.php.net/manual/en/function.fopen.php#refsect1-function.fopen-parameters
	 * @var string
	 */
	public const EB = 'eb';

	/**
	 * @inheritDoc
	 */
	public static function fromStreamMode( StreamModeInterface $value ): StreamModeInterface
	{
		return new static( $value->getValue() );
	}
}
