<?php declare( strict_types = 1 );
namespace Codekandis\Shorty\Tests;

use function dirname;
use function error_reporting;
use function ini_set;
use const E_ALL;

/**
 * Represents the bootstrap script of the unit tests.
 * @package codekandis\shorty
 * @author  Christian Ramelow <info@codekandis.net>
 */
error_reporting( E_ALL );
ini_set( 'display_errors', 'On' );

require_once dirname( __DIR__, 1 ) . '/vendor/autoload.php';
