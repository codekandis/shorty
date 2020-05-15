<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Annotations;

use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Types\ClosureContainer;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Throwable;
use function class_exists;
use function sprintf;

/**
 * Represents an annotation controller.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class AnnotationController extends AbstractObject implements AnnotationControllerInterface
{
	/**
	 * Represents the error message if the annotation reader instantiation failed.
	 * @var string
	 */
	protected const ERROR_ANNOTATION_READER_INSTANTIATION_FAILED = 'The `Doctrine` annotation reader instantiation failed: %s';

	/**
	 * Stores the `Doctrine` annotation reader.
	 * @var AnnotationReader
	 */
	private AnnotationReader $annotationReader;

	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		AnnotationRegistry::registerLoader(
			new ClosureContainer(
				static fn( string $className ) => class_exists( $className )
			)
		);
	}

	/**
	 * @inheritDoc
	 */
	public function getAnnotationReader(): AnnotationReader
	{
		try
		{
			return $this->annotationReader
			       ?? $this->annotationReader = new AnnotationReader();
		}
		catch ( Throwable $exception )
		{
			throw new AnnotationReaderInstantiationFailedException(
				sprintf(
					static::ERROR_ANNOTATION_READER_INSTANTIATION_FAILED,
					$exception->getMessage()
				)
			);
		}
	}
}
