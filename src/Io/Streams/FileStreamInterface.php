<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io\Streams;

use CodeKandis\Shorty\Io\FileInterface;

/**
 * Represents the interface of all file streams.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FileStreamInterface extends StreamInterface
{
	/**
	 * Gets the underlying file of the stream.
	 * @return FileInterface The underlying file of the stream.
	 */
	public function getFile(): FileInterface;
}
