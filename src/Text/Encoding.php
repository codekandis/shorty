<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Text;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents a character encoding.
 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class Encoding extends AbstractString implements EncodingInterface
{
	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SEVEN_BIT = '7bit';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const EIGHT_BIT = '8bit';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ARMSCII8 = 'ArmSCII8';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ARMSCII_8 = 'ArmSCII-8';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ASCII = 'ASCII';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const BASE64 = 'BASE64';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const BIG_5 = 'BIG-5';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const BYTE2BE = 'byte2be';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const BYTE2LE = 'byte2le';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const BYTE4BE = 'byte4be';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const BYTE4LE = 'byte4le';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP866 = 'CP866';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP932 = 'CP932';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP936 = 'CP936';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP949 = 'CP949';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP950 = 'CP950';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP1251 = 'CP1251';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP1252 = 'CP1252';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP50220RAW = 'CP50220raw';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP50220 = 'CP50220';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP50221 = 'CP50221';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP50222 = 'CP50222';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const CP51932 = 'CP51932';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const EUCJP_WIN = 'eucJP-win';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const EUC_CN = 'EUC-CN';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const EUC_JP = 'EUC-JP';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const EUC_KR = 'EUC-KR';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const EUC_TW = 'EUC-TW';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const GB18030 = 'GB18030';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const HTML = 'HTML';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const HTML_ENTITIES = 'HTML-ENTITIES';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const HZ = 'HZ';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const IBM866 = 'IBM866';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_2022_JP = 'ISO-2022-JP';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_2022_JP_KDDI = 'ISO-2022-JP-KDDI';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_2022_JP_MOBILE_KDDI = 'ISO-2022-JP-MOBILE#KDDI';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_2022_JP_MS = 'ISO-2022-JP-MS';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_2022_KR = 'ISO-2022-KR';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_1 = 'ISO-8859-1';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_2 = 'ISO-8859-2';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_3 = 'ISO-8859-3';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_4 = 'ISO-8859-4';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_5 = 'ISO-8859-5';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_6 = 'ISO-8859-6';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_7 = 'ISO-8859-7';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_8 = 'ISO-8859-8';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_9 = 'ISO-8859-9';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_10 = 'ISO-8859-10';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_13 = 'ISO-8859-13';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_14 = 'ISO-8859-14';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_15 = 'ISO-8859-15';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const ISO_8859_16 = 'ISO-8859-16';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const JIS = 'JIS';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const JIS_MS = 'JIS-ms';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const KOI8_R = 'KOI8-R';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const KOI8_U = 'KOI8-U';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const MACJAPANESE = 'MacJapanese';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS = 'SJIS';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_DOCOMO = 'SJIS-DOCOMO';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_KDDI = 'SJIS-KDDI';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_MAC = 'SJIS-mac';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_MOBILE_DOCOMO = 'SJIS-Mobile#DOCOMO';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_MOBILE_KDDI = 'SJIS-Mobile#KDDI';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_MOBILE_SOFTBANK = 'SJIS-Mobile#SOFTBANK';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_SOFTBANK = 'SJIS-SOFTBANK';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const SJIS_WIN = 'SJIS-win';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UCS_2BE = 'UCS-2BE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UCS_2LE = 'UCS-2LE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UCS_2 = 'UCS-2';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UCS_4BE = 'UCS-4BE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UCS_4LE = 'UCS-4LE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UCS_4 = 'UCS-4';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UHC = 'UHC';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF7_IMAP = 'UTF7-IMAP';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_7 = 'UTF-7';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8 = 'UTF-8';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8_DOCOMO = 'UTF-8-DOCOMO';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8_KDDI = 'UTF-8-KDDI';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8_MOBILE_DOCOMO = 'UTF-8-Mobile#DOCOMO';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8_MOBILE_KDDI_A = 'UTF-8-Mobile#KDDI-A';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8_MOBILE_KDDI_B = 'UTF-8-Mobile#KDDI-B';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8_MOBILE_SOFTBANK = 'UTF-8-Mobile#SOFTBANK';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_8_SOFTBANK = 'UTF-8-SOFTBANK';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_16BE = 'UTF-16BE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_16LE = 'UTF-16LE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_16 = 'UTF-16';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_32BE = 'UTF-32BE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_32LE = 'UTF-32LE';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const UTF_32 = 'UTF-32';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const WINDOWS_1251 = 'Windows-1251';

	/**
	 * @see https://www.php.net/manual/en/mbstring.supported-encodings.php
	 * @var string
	 */
	public const WINDOWS_1252 = 'Windows-1252';

	/**
	 * Constructor method.
	 * @param string $value The encoding.
	 */
	public function __construct( string $value = self::UTF_8 )
	{
		parent::__construct( $value );
	}

	/**
	 * @inheritDoc
	 */
	public static function fromEncoding( EncodingInterface $value ): EncodingInterface
	{
		return new static( $value->getValue() );
	}
}
