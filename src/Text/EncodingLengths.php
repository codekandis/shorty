<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Text;

use CodeKandis\Shorty\Types\Wrapped\AbstractInt;

/**
 * Represents a character encoding length.
 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class EncodingLengths extends AbstractInt implements EncodingLengthsInterface
{
	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SEVEN_BIT = 0;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const EIGHT_BIT = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ARMSCII8 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ARMSCII_8 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ASCII = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const BASE64 = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const BIG_5 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const BYTE2BE = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const BYTE2LE = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const BYTE4BE = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const BYTE4LE = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP866 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP932 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP936 = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP949 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP950 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP1251 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP1252 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP50220RAW = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP50220 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP50221 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP50222 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const CP51932 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const EUCJP_WIN = 3;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const EUC_CN = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const EUC_JP = 3;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const EUC_KR = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const EUC_TW = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const GB18030 = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const HTML = 6;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const HTML_ENTITIES = 6;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const HZ = 6;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const IBM866 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_2022_JP = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_2022_JP_KDDI = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_2022_JP_MOBILE_KDDI = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_2022_JP_MS = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_2022_KR = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_1 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_2 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_3 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_4 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_5 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_6 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_7 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_8 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_9 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_10 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_13 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_14 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_15 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const ISO_8859_16 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const JIS = 9;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const JIS_MS = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const KOI8_R = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const KOI8_U = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const MACJAPANESE = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_DOCOMO = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_KDDI = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_MAC = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_MOBILE_DOCOMO = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_MOBILE_KDDI = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_MOBILE_SOFTBANK = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_SOFTBANK = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const SJIS_WIN = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UCS_2BE = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UCS_2LE = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UCS_2 = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UCS_4BE = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UCS_4LE = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UCS_4 = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UHC = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF7_IMAP = 5;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_7 = 5;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8 = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8_DOCOMO = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8_KDDI = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8_MOBILE_DOCOMO = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8_MOBILE_KDDI_A = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8_MOBILE_KDDI_B = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8_MOBILE_SOFTBANK = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_8_SOFTBANK = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_16BE = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_16LE = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_16 = 2;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_32BE = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_32LE = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const UTF_32 = 4;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const WINDOWS_1251 = 1;

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var int
	 */
	public const WINDOWS_1252 = 1;

	/**
	 * Constructor method.
	 * @param int $value The encoding.
	 */
	public function __construct( int $value = self::UTF_8 )
	{
		parent::__construct( $value );
	}

	/**
	 * @inheritDoc
	 */
	public static function fromEncodingLengths( EncodingLengthsInterface $value ): EncodingLengthsInterface
	{
		return new static( $value->getValue() );
	}
}
