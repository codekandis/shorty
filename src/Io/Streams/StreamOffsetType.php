<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractInt;
use const SEEK_CUR;
use const SEEK_END;
use const SEEK_SET;

/**
 * Represents an enumeration of possible offset positions.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class StreamOffsetType extends AbstractInt implements StreamOffsetTypeInterface
{
	/**
	 * Sets the stream pointer equal to the offset.
	 * @var int
	 */
	public const SEEK_SET = SEEK_SET;

	/**
	 * Sets the stream pointer equal to the current position plus the offset.
	 * @var int
	 */
	public const SEEK_CURRENT = SEEK_CUR;

	/**
	 * Sets the stream pointer to EOF plus the offset.
	 * @var int
	 */
	public const SEEK_END = SEEK_END;

	/**
	 * Constructor method.
	 * @param int $value The offset position.
	 */
	public function __construct( int $value = self::SEEK_SET )
	{
		parent::__construct( $value );
	}

	/**
	 * @inheritDoc
	 */
	public static function fromStreamOffsetType( StreamOffsetTypeInterface $value ): StreamOffsetTypeInterface
	{
		return new static( $value->getValue() );
	}
}
