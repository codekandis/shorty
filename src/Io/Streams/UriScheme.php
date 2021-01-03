<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;

/**
 * Represents an URI scheme as registered at IANA as of 2020-12-15.
 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
abstract class UriScheme extends AbstractString implements UriSchemeInterface
{
	/**
	 * Represents the `Diameter Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const AAA = 'aaa';

	/**
	 * Represents the `Diameter Protocol with Secure Transport` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const AAAS = 'aaas';

	/**
	 * Represents the `about` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ABOUT = 'about';

	/**
	 * Represents the `application configuration access protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ACAP = 'acap';

	/**
	 * Represents the `acct` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ACCT = 'acct';

	/**
	 * Represents the `acd` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ACD = 'acd';

	/**
	 * Represents the `acr` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ACR = 'acr';

	/**
	 * Represents the `adiumxtra` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ADIUMXTRA = 'adiumxtra';

	/**
	 * Represents the `adt` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ADT = 'adt';

	/**
	 * Represents the `afp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const AFP = 'afp';

	/**
	 * Represents the `Andrew File System global file names` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const AFS = 'afs';

	/**
	 * Represents the `aim` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const AIM = 'aim';

	/**
	 * Represents the `amss` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const AMSS = 'amss';

	/**
	 * Represents the `android` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ANDROID = 'android';

	/**
	 * Represents the `appdata` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const APPDATA = 'appdata';

	/**
	 * Represents the `apt` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const APT = 'apt';

	/**
	 * Represents the `ark` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ARK = 'ark';

	/**
	 * Represents the `attachment` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ATTACHMENT = 'attachment';

	/**
	 * Represents the `aw` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const AW = 'aw';

	/**
	 * Represents the `barion` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const BARION = 'barion';

	/**
	 * Represents the `beshare` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const BESHARE = 'beshare';

	/**
	 * Represents the `bitcoin` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const BITCOIN = 'bitcoin';

	/**
	 * Represents the `bitcoincash` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const BITCOINCASH = 'bitcoincash';

	/**
	 * Represents the `blob` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const BLOB = 'blob';

	/**
	 * Represents the `bolo` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const BOLO = 'bolo';

	/**
	 * Represents the `browserext` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const BROWSEREXT = 'browserext';

	/**
	 * Represents the `cabal` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CABAL = 'cabal';

	/**
	 * Represents the `calculator` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CALCULATOR = 'calculator';

	/**
	 * Represents the `callto` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CALLTO = 'callto';

	/**
	 * Represents the `Calendar Access Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CAP = 'cap';

	/**
	 * Represents the `cast` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CAST = 'cast';

	/**
	 * Represents the `casts` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CASTS = 'casts';

	/**
	 * Represents the `chrome` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CHROME = 'chrome';

	/**
	 * Represents the `chrome-extension` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CHROME_EXTENSION = 'chrome-extension';

	/**
	 * Represents the `content identifier` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CID = 'cid';

	/**
	 * Represents the `coap` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const COAP = 'coap';

	/**
	 * Represents the `coap+tcp [1]` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const COAP_TCP = 'coap+tcp';

	/**
	 * Represents the `coap+ws [1]` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const COAP_WS = 'coap+ws';

	/**
	 * Represents the `coaps` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const COAPS = 'coaps';

	/**
	 * Represents the `coaps+tcp [1]` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const COAPS_TCP = 'coaps+tcp';

	/**
	 * Represents the `coaps+ws [1]` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const COAPS_WS = 'coaps+ws';

	/**
	 * Represents the `com-eventbrite-attendee` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const COM_EVENTBRITE_ATTENDEE = 'com-eventbrite-attendee';

	/**
	 * Represents the `content` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CONTENT = 'content';

	/**
	 * Represents the `conti` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CONTI = 'conti';

	/**
	 * Represents the `TV-Anytime Content Reference Identifier` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CRID = 'crid';

	/**
	 * Represents the `cvs` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const CVS = 'cvs';

	/**
	 * Represents the `dab` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DAB = 'dab';

	/**
	 * Represents the `dat` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DAT = 'dat';

	/**
	 * Represents the `data` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DATA = 'data';

	/**
	 * Represents the `dav` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DAV = 'dav';

	/**
	 * Represents the `diaspora` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DIASPORA = 'diaspora';

	/**
	 * Represents the `dictionary service protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DICT = 'dict';

	/**
	 * Represents the `did` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DID = 'did';

	/**
	 * Represents the `dis` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DIS = 'dis';

	/**
	 * Represents the `dlna-playcontainer` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DLNA_PLAYCONTAINER = 'dlna-playcontainer';

	/**
	 * Represents the `dlna-playsingle` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DLNA_PLAYSINGLE = 'dlna-playsingle';

	/**
	 * Represents the `Domain Name System` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DNS = 'dns';

	/**
	 * Represents the `dntp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DNTP = 'dntp';

	/**
	 * Represents the `doi` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DOI = 'doi';

	/**
	 * Represents the `dpp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DPP = 'dpp';

	/**
	 * Represents the `drm` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DRM = 'drm';

	/**
	 * Represents the `drop` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DROP = 'drop';

	/**
	 * Represents the `dtmi` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DTMI = 'dtmi';

	/**
	 * Represents the `DTNRG research and development` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DTN = 'dtn';

	/**
	 * Represents the `dvb` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DVB = 'dvb';

	/**
	 * Represents the `dweb` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const DWEB = 'dweb';

	/**
	 * Represents the `ed2k` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ED2K = 'ed2k';

	/**
	 * Represents the `elsi` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ELSI = 'elsi';

	/**
	 * Represents the `ens` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ENS = 'ens';

	/**
	 * Represents the `ethereum` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ETHEREUM = 'ethereum';

	/**
	 * Represents the `example` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const EXAMPLE = 'example';

	/**
	 * Represents the `facetime` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FACETIME = 'facetime';

	/**
	 * Represents the `fax` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FAX = 'fax';

	/**
	 * Represents the `feed` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FEED = 'feed';

	/**
	 * Represents the `feedready` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FEEDREADY = 'feedready';

	/**
	 * Represents the `Host-specific file names` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FILE = 'file';

	/**
	 * Represents the `filesystem` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FILESYSTEM = 'filesystem';

	/**
	 * Represents the `finger` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FINGER = 'finger';

	/**
	 * Represents the `first-run-pen-experience` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FIRST_RUN_PEN_EXPERIENCE = 'first-run-pen-experience';

	/**
	 * Represents the `fish` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FISH = 'fish';

	/**
	 * Represents the `fm` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FM = 'fm';

	/**
	 * Represents the `File Transfer Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FTP = 'ftp';

	/**
	 * Represents the `fuchsia-pkg` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const FUCHSIA_PKG = 'fuchsia-pkg';

	/**
	 * Represents the `Geographic Locations` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GEO = 'geo';

	/**
	 * Represents the `gg` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GG = 'gg';

	/**
	 * Represents the `git` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GIT = 'git';

	/**
	 * Represents the `gizmoproject` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GIZMOPROJECT = 'gizmoproject';

	/**
	 * Represents the `go` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GO = 'go';

	/**
	 * Represents the `The Gopher Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GOPHER = 'gopher';

	/**
	 * Represents the `graph` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GRAPH = 'graph';

	/**
	 * Represents the `gtalk` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const GTALK = 'gtalk';

	/**
	 * Represents the `H.323` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const H323 = 'h323';

	/**
	 * Represents the `ham` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HAM = 'ham';

	/**
	 * Represents the `hcap` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HCAP = 'hcap';

	/**
	 * Represents the `hcp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HCP = 'hcp';

	/**
	 * Represents the `Hypertext Transfer Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HTTP = 'http';

	/**
	 * Represents the `Hypertext Transfer Protocol Secure` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HTTPS = 'https';

	/**
	 * Represents the `hxxp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HXXP = 'hxxp';

	/**
	 * Represents the `hxxps` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HXXPS = 'hxxps';

	/**
	 * Represents the `hydrazone` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HYDRAZONE = 'hydrazone';

	/**
	 * Represents the `hyper` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const HYPER = 'hyper';

	/**
	 * Represents the `Inter-Asterisk eXchange Version 2` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IAX = 'iax';

	/**
	 * Represents the `Internet Content Adaptation Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ICAP = 'icap';

	/**
	 * Represents the `icon` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ICON = 'icon';

	/**
	 * Represents the `Instant Messaging` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IM = 'im';

	/**
	 * Represents the `internet message access protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IMAP = 'imap';

	/**
	 * Represents the `Information Assets with Identifiers in Public Namespaces. [RFC4452] (section 3) defines an "info" registry of public namespaces, which is maintained by NISO and can be accessed from [http://info-uri.info/].` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const INFO = 'info';

	/**
	 * Represents the `iotdisco` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IOTDISCO = 'iotdisco';

	/**
	 * Represents the `ipfs` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IPFS = 'ipfs';

	/**
	 * Represents the `ipn` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IPN = 'ipn';

	/**
	 * Represents the `ipns` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IPNS = 'ipns';

	/**
	 * Represents the `Internet Printing Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IPP = 'ipp';

	/**
	 * Represents the `Internet Printing Protocol over HTTPS` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IPPS = 'ipps';

	/**
	 * Represents the `irc` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRC = 'irc';

	/**
	 * Represents the `irc6` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRC6 = 'irc6';

	/**
	 * Represents the `ircs` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRCS = 'ircs';

	/**
	 * Represents the `Internet Registry Information Service` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRIS = 'iris';

	/**
	 * Represents the `iris.beep` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRIS_BEEP = 'iris.beep';

	/**
	 * Represents the `iris.lwz` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRIS_LWZ = 'iris.lwz';

	/**
	 * Represents the `iris.xpc` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRIS_XPC = 'iris.xpc';

	/**
	 * Represents the `iris.xpcs` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const IRIS_XPCS = 'iris.xpcs';

	/**
	 * Represents the `isostore` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ISOSTORE = 'isostore';

	/**
	 * Represents the `itms` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ITMS = 'itms';

	/**
	 * Represents the `jabber` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const JABBER = 'jabber';

	/**
	 * Represents the `jar` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const JAR = 'jar';

	/**
	 * Represents the `Java Message Service` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const JMS = 'jms';

	/**
	 * Represents the `keyparc` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const KEYPARC = 'keyparc';

	/**
	 * Represents the `lastfm` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const LASTFM = 'lastfm';

	/**
	 * Represents the `lbry` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const LBRY = 'lbry';

	/**
	 * Represents the `Lightweight Directory Access Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const LDAP = 'ldap';

	/**
	 * Represents the `ldaps` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const LDAPS = 'ldaps';

	/**
	 * Represents the `leaptofrogans` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const LEAPTOFROGANS = 'leaptofrogans';

	/**
	 * Represents the `lorawan` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const LORAWAN = 'lorawan';

	/**
	 * Represents the `lvlt` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const LVLT = 'lvlt';

	/**
	 * Represents the `magnet` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MAGNET = 'magnet';

	/**
	 * Represents the `Access to data available from mail servers` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MAILSERVER = 'mailserver';

	/**
	 * Represents the `Electronic mail address` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MAILTO = 'mailto';

	/**
	 * Represents the `maps` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MAPS = 'maps';

	/**
	 * Represents the `market` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MARKET = 'market';

	/**
	 * Represents the `matrix` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MATRIX = 'matrix';

	/**
	 * Represents the `message` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MESSAGE = 'message';

	/**
	 * Represents the `microsoft.windows.camera` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MICROSOFT_WINDOWS_CAMERA = 'microsoft.windows.camera';

	/**
	 * Represents the `microsoft.windows.camera.multipicker` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MICROSOFT_WINDOWS_CAMERA_MULTIPICKER = 'microsoft.windows.camera.multipicker';

	/**
	 * Represents the `microsoft.windows.camera.picker` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MICROSOFT_WINDOWS_CAMERA_PICKER = 'microsoft.windows.camera.picker';

	/**
	 * Represents the `message identifier` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MID = 'mid';

	/**
	 * Represents the `mms` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MMS = 'mms';

	/**
	 * Represents the `modem` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MODEM = 'modem';

	/**
	 * Represents the `mongodb` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MONGODB = 'mongodb';

	/**
	 * Represents the `moz` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MOZ = 'moz';

	/**
	 * Represents the `ms-access` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_ACCESS = 'ms-access';

	/**
	 * Represents the `ms-browser-extension` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_BROWSER_EXTENSION = 'ms-browser-extension';

	/**
	 * Represents the `ms-calculator` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_CALCULATOR = 'ms-calculator';

	/**
	 * Represents the `ms-drive-to` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_DRIVE_TO = 'ms-drive-to';

	/**
	 * Represents the `ms-enrollment` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_ENROLLMENT = 'ms-enrollment';

	/**
	 * Represents the `ms-excel` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_EXCEL = 'ms-excel';

	/**
	 * Represents the `ms-eyecontrolspeech` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_EYECONTROLSPEECH = 'ms-eyecontrolspeech';

	/**
	 * Represents the `ms-gamebarservices` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_GAMEBARSERVICES = 'ms-gamebarservices';

	/**
	 * Represents the `ms-gamingoverlay` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_GAMINGOVERLAY = 'ms-gamingoverlay';

	/**
	 * Represents the `ms-getoffice` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_GETOFFICE = 'ms-getoffice';

	/**
	 * Represents the `ms-help` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_HELP = 'ms-help';

	/**
	 * Represents the `ms-infopath` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_INFOPATH = 'ms-infopath';

	/**
	 * Represents the `ms-inputapp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_INPUTAPP = 'ms-inputapp';

	/**
	 * Represents the `ms-lockscreencomponent-config` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_LOCKSCREENCOMPONENT_CONFIG = 'ms-lockscreencomponent-config';

	/**
	 * Represents the `ms-media-stream-id` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_MEDIA_STREAM_ID = 'ms-media-stream-id';

	/**
	 * Represents the `ms-mixedrealitycapture` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_MIXEDREALITYCAPTURE = 'ms-mixedrealitycapture';

	/**
	 * Represents the `ms-mobileplans` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_MOBILEPLANS = 'ms-mobileplans';

	/**
	 * Represents the `ms-officeapp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_OFFICEAPP = 'ms-officeapp';

	/**
	 * Represents the `ms-people` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_PEOPLE = 'ms-people';

	/**
	 * Represents the `ms-project` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_PROJECT = 'ms-project';

	/**
	 * Represents the `ms-powerpoint` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_POWERPOINT = 'ms-powerpoint';

	/**
	 * Represents the `ms-publisher` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_PUBLISHER = 'ms-publisher';

	/**
	 * Represents the `ms-restoretabcompanion` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_RESTORETABCOMPANION = 'ms-restoretabcompanion';

	/**
	 * Represents the `ms-screenclip` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SCREENCLIP = 'ms-screenclip';

	/**
	 * Represents the `ms-screensketch` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SCREENSKETCH = 'ms-screensketch';

	/**
	 * Represents the `ms-search` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SEARCH = 'ms-search';

	/**
	 * Represents the `ms-search-repair` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SEARCH_REPAIR = 'ms-search-repair';

	/**
	 * Represents the `ms-secondary-screen-controller` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SECONDARY_SCREEN_CONTROLLER = 'ms-secondary-screen-controller';

	/**
	 * Represents the `ms-secondary-screen-setup` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SECONDARY_SCREEN_SETUP = 'ms-secondary-screen-setup';

	/**
	 * Represents the `ms-settings` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS = 'ms-settings';

	/**
	 * Represents the `ms-settings-airplanemode` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_AIRPLANEMODE = 'ms-settings-airplanemode';

	/**
	 * Represents the `ms-settings-bluetooth` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_BLUETOOTH = 'ms-settings-bluetooth';

	/**
	 * Represents the `ms-settings-camera` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_CAMERA = 'ms-settings-camera';

	/**
	 * Represents the `ms-settings-cellular` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_CELLULAR = 'ms-settings-cellular';

	/**
	 * Represents the `ms-settings-cloudstorage` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_CLOUDSTORAGE = 'ms-settings-cloudstorage';

	/**
	 * Represents the `ms-settings-connectabledevices` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_CONNECTABLEDEVICES = 'ms-settings-connectabledevices';

	/**
	 * Represents the `ms-settings-displays-topology` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_DISPLAYS_TOPOLOGY = 'ms-settings-displays-topology';

	/**
	 * Represents the `ms-settings-emailandaccounts` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_EMAILANDACCOUNTS = 'ms-settings-emailandaccounts';

	/**
	 * Represents the `ms-settings-language` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_LANGUAGE = 'ms-settings-language';

	/**
	 * Represents the `ms-settings-location` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_LOCATION = 'ms-settings-location';

	/**
	 * Represents the `ms-settings-lock` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_LOCK = 'ms-settings-lock';

	/**
	 * Represents the `ms-settings-nfctransactions` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_NFCTRANSACTIONS = 'ms-settings-nfctransactions';

	/**
	 * Represents the `ms-settings-notifications` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_NOTIFICATIONS = 'ms-settings-notifications';

	/**
	 * Represents the `ms-settings-power` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_POWER = 'ms-settings-power';

	/**
	 * Represents the `ms-settings-privacy` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_PRIVACY = 'ms-settings-privacy';

	/**
	 * Represents the `ms-settings-proximity` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_PROXIMITY = 'ms-settings-proximity';

	/**
	 * Represents the `ms-settings-screenrotation` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_SCREENROTATION = 'ms-settings-screenrotation';

	/**
	 * Represents the `ms-settings-wifi` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_WIFI = 'ms-settings-wifi';

	/**
	 * Represents the `ms-settings-workplace` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SETTINGS_WORKPLACE = 'ms-settings-workplace';

	/**
	 * Represents the `ms-spd` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_SPD = 'ms-spd';

	/**
	 * Represents the `ms-sttoverlay` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_STTOVERLAY = 'ms-sttoverlay';

	/**
	 * Represents the `ms-transit-to` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_TRANSIT_TO = 'ms-transit-to';

	/**
	 * Represents the `ms-useractivityset` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_USERACTIVITYSET = 'ms-useractivityset';

	/**
	 * Represents the `ms-virtualtouchpad` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_VIRTUALTOUCHPAD = 'ms-virtualtouchpad';

	/**
	 * Represents the `ms-visio` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_VISIO = 'ms-visio';

	/**
	 * Represents the `ms-walk-to` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_WALK_TO = 'ms-walk-to';

	/**
	 * Represents the `ms-whiteboard` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_WHITEBOARD = 'ms-whiteboard';

	/**
	 * Represents the `ms-whiteboard-cmd` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_WHITEBOARD_CMD = 'ms-whiteboard-cmd';

	/**
	 * Represents the `ms-word` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MS_WORD = 'ms-word';

	/**
	 * Represents the `msnim` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MSNIM = 'msnim';

	/**
	 * Represents the `Message Session Relay Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MSRP = 'msrp';

	/**
	 * Represents the `Message Session Relay Protocol Secure` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MSRPS = 'msrps';

	/**
	 * Represents the `mss` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MSS = 'mss';

	/**
	 * Represents the `Message Tracking Query Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MTQP = 'mtqp';

	/**
	 * Represents the `mumble` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MUMBLE = 'mumble';

	/**
	 * Represents the `Mailbox Update (MUPDATE) Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MUPDATE = 'mupdate';

	/**
	 * Represents the `mvn` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const MVN = 'mvn';

	/**
	 * Represents the `USENET news` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const NEWS = 'news';

	/**
	 * Represents the `network file system protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const NFS = 'nfs';

	/**
	 * Represents the `ni` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const NI = 'ni';

	/**
	 * Represents the `nih` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const NIH = 'nih';

	/**
	 * Represents the `USENET news using NNTP access` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const NNTP = 'nntp';

	/**
	 * Represents the `notes` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const NOTES = 'notes';

	/**
	 * Represents the `Namespace Utility Modules` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const NUM = 'num';

	/**
	 * Represents the `ocf` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const OCF = 'ocf';

	/**
	 * Represents the `oid` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const OID = 'oid';

	/**
	 * Represents the `onenote` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ONENOTE = 'onenote';

	/**
	 * Represents the `onenote-cmd` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const ONENOTE_CMD = 'onenote-cmd';

	/**
	 * Represents the `opaquelocktokent` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const OPAQUELOCKTOKEN = 'opaquelocktoken';

	/**
	 * Represents the `openpgp4fpr` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const OPENPGP4FPR = 'openpgp4fpr';

	/**
	 * Represents the `otpauth` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const OTPAUTH = 'otpauth';

	/**
	 * Represents the `pack` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PACK = 'pack';

	/**
	 * Represents the `palm` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PALM = 'palm';

	/**
	 * Represents the `paparazzi` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PAPARAZZI = 'paparazzi';

	/**
	 * Represents the `payment` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PAYMENT = 'payment';

	/**
	 * Represents the `payto` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PAYTO = 'payto';

	/**
	 * Represents the `PKCS#11` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PKCS11 = 'pkcs11';

	/**
	 * Represents the `platform` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PLATFORM = 'platform';

	/**
	 * Represents the `Post Office Protocol v3` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const POP = 'pop';

	/**
	 * Represents the `Presence` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PRES = 'pres';

	/**
	 * Represents the `Prospero Directory Service` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PROSPERO = 'prospero';

	/**
	 * Represents the `proxy` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PROXY = 'proxy';

	/**
	 * Represents the `pwid` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PWID = 'pwid';

	/**
	 * Represents the `psyc` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PSYC = 'psyc';

	/**
	 * Represents the `pttp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const PTTP = 'pttp';

	/**
	 * Represents the `qb` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const QB = 'qb';

	/**
	 * Represents the `query` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const QUERY = 'query';

	/**
	 * Represents the `quic-transport` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const QUIC_TRANSPORT = 'quic-transport';

	/**
	 * Represents the `redis` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const REDIS = 'redis';

	/**
	 * Represents the `rediss` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const REDISS = 'rediss';

	/**
	 * Represents the `reload` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RELOAD = 'reload';

	/**
	 * Represents the `res` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RES = 'res';

	/**
	 * Represents the `resource` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RESOURCE = 'resource';

	/**
	 * Represents the `rmi` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RMI = 'rmi';

	/**
	 * Represents the `rsync` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RSYNC = 'rsync';

	/**
	 * Represents the `rtmfp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RTMFP = 'rtmfp';

	/**
	 * Represents the `rtmp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RTMP = 'rtmp';

	/**
	 * Represents the `Real-Time Streaming Protocol (RTSP)` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RTSP = 'rtsp';

	/**
	 * Represents the `Real-Time Streaming Protocol (RTSP) over TLS` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RTSPS = 'rtsps';

	/**
	 * Represents the `Real-Time Streaming Protocol (RTSP) over unreliable datagram transport` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const RTSPU = 'rtspu';

	/**
	 * Represents the `query` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SECONDLIFE = 'secondlife';

	/**
	 * Represents the `secret-token` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SECRET_TOKEN = 'secret-token';

	/**
	 * Represents the `service location` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SERVICE = 'service';

	/**
	 * Represents the `session` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SESSION = 'session';

	/**
	 * Represents the `query` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SFTP = 'sftp';

	/**
	 * Represents the `sgn` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SGN = 'sgn';

	/**
	 * Represents the `Secure Hypertext Transfer Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SHTTP = 'shttp';

	/**
	 * Represents the `ManageSieve Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SIEVE = 'sieve';

	/**
	 * Represents the `simpleledger` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SIMPLELEDGER = 'simpleledger';

	/**
	 * Represents the `session initiation protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SIP = 'sip';

	/**
	 * Represents the `secure session initiation protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SIPS = 'sips';

	/**
	 * Represents the `skype` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SKYPE = 'skype';

	/**
	 * Represents the `smb` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SMB = 'smb';

	/**
	 * Represents the `Short Message Service` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SMS = 'sms';

	/**
	 * Represents the `smtp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SMTP = 'smtp';

	/**
	 * Represents the `NNTP over SSL/TLS` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SNEWS = 'snews';

	/**
	 * Represents the `Simple Network Management Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SNMP = 'snmp';

	/**
	 * Represents the `soap.beep` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SOAP_BEEP = 'soap.beep';

	/**
	 * Represents the `soap.beeps` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SOAP_BEEPS = 'soap.beeps';

	/**
	 * Represents the `soldat` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SOLDAT = 'soldat';

	/**
	 * Represents the `spiffe` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SPIFFE = 'spiffe';

	/**
	 * Represents the `spotify` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SPOTIFY = 'spotify';

	/**
	 * Represents the `ssb` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SSB = 'ssb';

	/**
	 * Represents the `ssh` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SSH = 'ssh';

	/**
	 * Represents the `steam` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const STEAM = 'steam';

	/**
	 * Represents the `stun` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const STUN = 'stun';

	/**
	 * Represents the `stuns` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const STUNS = 'stuns';

	/**
	 * Represents the `submit` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SUBMIT = 'submit';

	/**
	 * Represents the `swh` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SWH = 'swh';

	/**
	 * Represents the `svn` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const SVN = 'svn';

	/**
	 * Represents the `tag` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TAG = 'tag';

	/**
	 * Represents the `teamspeak` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TEAMSPEAK = 'teamspeak';

	/**
	 * Represents the `telephone` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TEL = 'tel';

	/**
	 * Represents the `teliaeid` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TELIAEID = 'teliaeid';

	/**
	 * Represents the `Reference to interactive sessions` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TELNET = 'telnet';

	/**
	 * Represents the `Trivial File Transfer Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TFTP = 'tftp';

	/**
	 * Represents the `things` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const THINGS = 'things';

	/**
	 * Represents the `multipart/related relative reference resolution` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const THISMESSAGE = 'thismessage';

	/**
	 * Represents the `Transaction Internet Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TIP = 'tip';

	/**
	 * Represents the `Interactive 3270 emulation sessions` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TN3270 = 'tn3270';

	/**
	 * Represents the `tool` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TOOL = 'tool';

	/**
	 * Represents the `turn` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TURN = 'turn';

	/**
	 * Represents the `turns` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TURNS = 'turns';

	/**
	 * Represents the `TV Broadcasts` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const TV = 'tv';

	/**
	 * Represents the `udp` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const UDP = 'udp';

	/**
	 * Represents the `unreal` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const UNREAL = 'unreal';

	/**
	 * Represents the `upt` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const UPT = 'upt';

	/**
	 * Represents the `Uniform Resource Names` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const URN = 'urn';

	/**
	 * Represents the `ut2004` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const UT2004 = 'ut2004';

	/**
	 * Represents the `v-event` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const V_EVENT = 'v-event';

	/**
	 * Represents the `versatile multimedia interface` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VEMMI = 'vemmi';

	/**
	 * Represents the `ventrilo` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VENTRILO = 'ventrilo';

	/**
	 * Represents the `videotex` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VIDEOTEX = 'videotex';

	/**
	 * Represents the `Remote Framebuffer Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VNC = 'vnc';

	/**
	 * Represents the `view-source` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VIEW_SOURCE = 'view-source';

	/**
	 * Represents the `vscode` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VSCODE = 'vscode';

	/**
	 * Represents the `vscode-insiders` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VSCODE_INSIDERS = 'vscode-insiders';

	/**
	 * Represents the `vsls` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const VSLS = 'vsls';

	/**
	 * Represents the `Wide Area Information Servers` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WAIS = 'wais';

	/**
	 * Represents the `wcr` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WCR = 'wcr';

	/**
	 * Represents the `webcal` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WEBCAL = 'webcal';

	/**
	 * Represents the `wifi` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WIFI = 'wifi';

	/**
	 * Represents the `wpid` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WPID = 'wpid';

	/**
	 * Represents the `WebSocket connections` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WS = 'ws';

	/**
	 * Represents the `Encrypted WebSocket connections` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WSS = 'wss';

	/**
	 * Represents the `wtai` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WTAI = 'wtai';

	/**
	 * Represents the `wyciwyg` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const WYCIWYG = 'wyciwyg';

	/**
	 * Represents the `xcon` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const XCON = 'xcon';

	/**
	 * Represents the `xcon-userid` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const XCON_USERID = 'xcon-userid';

	/**
	 * Represents the `xfire` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const XFIRE = 'xfire';

	/**
	 * Represents the `xmlrpc.beep` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const XMLRPC_BEEP = 'xmlrpc.beep';

	/**
	 * Represents the `xmlrpc.beeps` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const XMLRPC_BEEPS = 'xmlrpc.beeps';

	/**
	 * Represents the `Extensible Messaging and Presence Protocol` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const XMPP = 'xmpp';

	/**
	 * Represents the `xri` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const XRI = 'xri';

	/**
	 * Represents the `ymsgr` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const YMSGR = 'ymsgr';

	/**
	 * Represents the `Z39.50 information access` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const Z39_50 = 'z39.50';

	/**
	 * Represents the `Z39.50 Retrieval` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const Z39_50R = 'z39.50r';

	/**
	 * Represents the `Z39.50 Session` URI scheme.
	 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
	 * @var string
	 */
	public const Z39_50S = 'z39.50s';

	/**
	 * @inheritDoc
	 */
	public static function fromUriScheme( UriSchemeInterface $value ): UriSchemeInterface
	{
		return new static( $value->getValue() );
	}
}
