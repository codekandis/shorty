<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractString;
use function pathinfo;
use function str_replace;
use const DIRECTORY_SEPARATOR;
use const PATHINFO_BASENAME;
use const PATHINFO_DIRNAME;
use const PATHINFO_EXTENSION;
use const PATHINFO_FILENAME;

/**
 * Represents a wrapped path.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class Path extends AbstractString implements PathInterface
{
	/**
	 * Stores the base name of the path.
	 * @var string
	 */
	private string $baseName;

	/**
	 * Stores the directory name of the path.
	 * @var string
	 */
	private string $directoryName;

	/**
	 * Stores the name of the path.
	 * @var string
	 */
	private string $name;

	/**
	 * Stores the extension of the path.
	 * @var string
	 */
	private string $extension;

	/**
	 * Constructor method.
	 * @param string $path The path value to wrap.
	 */
	public function __construct( string $path )
	{
		$preparedPath = str_replace(
			[
				'/',
				'\\'
			],
			DIRECTORY_SEPARATOR,
			$path
		);
		parent::__construct( $preparedPath );

		$pathInformation     = pathinfo( $preparedPath, PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_FILENAME | PATHINFO_EXTENSION );
		$this->baseName      = $pathInformation[ 'basename' ]
							   ?? '';
		$this->directoryName = $pathInformation[ 'dirname' ]
							   ?? '';
		$this->name          = $pathInformation[ 'filename' ]
							   ?? '';
		$this->extension     = $pathInformation[ 'extension' ]
							   ?? '';
	}

	/**
	 * @inheritDoc
	 */
	public static function fromPath( PathInterface $value ): PathInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function getBaseName(): string
	{
		return $this->baseName;
	}

	/**
	 * @inheritDoc
	 */
	public function getDirectoryName(): string
	{
		return $this->directoryName;
	}

	/**
	 * @inheritDoc
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @inheritDoc
	 */
	public function getExtension(): string
	{
		return $this->extension;
	}
}
