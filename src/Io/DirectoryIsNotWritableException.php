<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

/**
 * Represents the exception if a directory is not writable.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class DirectoryIsNotWritableException extends FileSystemEntryIsNotWritableException
{
}
