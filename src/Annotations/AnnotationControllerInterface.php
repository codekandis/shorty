<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Annotations;

use Doctrine\Common\Annotations\AnnotationReader;

/**
 * Represents the interface of all annotation controllers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
interface AnnotationControllerInterface
{
	/**
	 * Gets the `Doctrine` annotation reader.
	 * @return AnnotationReader The `Doctrine` annotation reader.
	 * @throws AnnotationReaderInstantiationFailedException The `Doctrine` annotation reader instantiation failed.
	 */
	public function getAnnotationReader(): AnnotationReader;
}
