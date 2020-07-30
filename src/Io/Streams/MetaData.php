<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Data\Serialization\SerializationContractAttribute;
use CodeKandis\Shorty\Types\Wrapped\AbstractArray;

/**
 * Represents the meta data of a stream.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 * @SerializationContractAttribute( serializeSinglePropertyOnly = true )
 */
class MetaData extends AbstractArray implements MetaDataInterface
{
	/**
	 * @inheritDoc
	 */
	public static function fromMetaData( MetaDataInterface $value ): MetaDataInterface
	{
		return new static( $value->getValue() );
	}

	/**
	 * @inheritDoc
	 */
	public function isTimedOut(): bool
	{
		return $this->value[ 'timed_out' ];
	}

	/**
	 * @inheritDoc
	 */
	public function isBlocked(): bool
	{
		return $this->value[ 'blocked' ];
	}

	/**
	 * @inheritDoc
	 */
	public function isEndOfFile(): bool
	{
		return $this->value[ 'eof' ];
	}

	/**
	 * @inheritDoc
	 */
	public function getUnreadBytes(): int
	{
		return $this->value[ 'unread_bytes' ];
	}

	/**
	 * @inheritDoc
	 */
	public function getStreamType(): string
	{
		return $this->value[ 'stream_type' ];
	}

	/**
	 * @inheritDoc
	 */
	public function getWrapperType(): string
	{
		return $this->value[ 'wrapper_type' ];
	}

	/**
	 * @inheritDoc
	 */
	public function getWrapperData()
	{
		return $this->value[ 'wrapper_data' ];
	}

	/**
	 * @inheritDoc
	 */
	public function getMode(): StreamModeInterface
	{
		return new StreamMode( $this->value[ 'mode' ] );
	}

	/**
	 * @inheritDoc
	 */
	public function isSeekable(): bool
	{
		return $this->value[ 'seekable' ];
	}

	/**
	 * @inheritDoc
	 */
	public function getUri(): UriInterface
	{
		return new Uri( $this->value[ 'uri' ] );
	}
}
