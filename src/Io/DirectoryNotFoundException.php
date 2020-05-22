<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Io;

/**
 * Represents the exception if a directory does not exist.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class DirectoryNotFoundException extends FileSystemEntryNotFoundException
{
}
