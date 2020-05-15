<?php declare( strict_types = 1 );
namespace CodeKandis\Shorty\Data\Serialization\Json;

use CodeKandis\JsonCodec\JsonDecoder;
use CodeKandis\Shorty\AbstractObject;
use CodeKandis\Shorty\Annotations\AnnotationReaderInstantiationFailedException;
use CodeKandis\Shorty\Data\Serialization\DeserializationFailedException;
use CodeKandis\Shorty\Data\Serialization\NotASerializationContractException;
use CodeKandis\Shorty\Data\Serialization\ParsedSerializationProperty;
use CodeKandis\Shorty\Data\Serialization\SerializationContractHasNoPropertiesException;
use CodeKandis\Shorty\Data\Serialization\SerializationContractHasTooMuchPropertiesException;
use CodeKandis\Shorty\Data\Serialization\SerializationContractNotFoundException;
use CodeKandis\Shorty\Data\Serialization\SerializationContractParser;
use JsonException;
use stdClass;
use function is_array;
use function is_object;

/**
 * Represents the interface of all JSON deserializers.
 * @package codekandis/shorty
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDeserializer extends AbstractObject implements JsonDeserializerInterface
{
	/**
	 * Represents the error message if a deserialization failed.
	 * @var string
	 */
	protected const ERROR_DESERIALIZATION_FAILED = 'The deserialization failed.';

	/**
	 * Retransforms a sequencial array.
	 * @param array $data The array to retransform.
	 * @return array The retransformed array.
	 */
	private function retransformSequencialArray( array $data ): array
	{
		return $data;
	}

	/**
	 * Retransforms an object into an associative array.
	 * @param stdClass $data The object to retransform.
	 * @return array The retransformed associative array.
	 */
	private function retransformAssociativeArray( stdClass $data ): array
	{
		$retransformedArray = [];
		/**
		 * @var iterable $data
		 */
		foreach ( $data as $dataKey => $dataFetched )
		{
			$retransformedArray[ $dataKey ] = $dataFetched;
		}

		return $retransformedArray;
	}

	/**
	 * Retransforms an object specified by its serialization property attributes.
	 * @param mixed $data The object to retransform.
	 * @param string $class The name of the retransformed class.
	 * @return object The retransformed object.
	 * @throws SerializationContractNotFoundException The serialization contract does not exist.
	 * @throws NotASerializationContractException The class is not marked as a JSON contract.
	 * @throws AnnotationReaderInstantiationFailedException The annotation reader cannot be instantiated.
	 * @throws SerializationContractHasNoPropertiesException The serialization contract does not have any properties marked as serialization property.
	 * @throws SerializationContractHasTooMuchPropertiesException The serialization contract is marked as serialize single property only but has more than one properties marked for serialization.
	 */
	private function retransformObject( $data, string $class )
	{
		$parsedContract              = ( new SerializationContractParser( $class ) )
			->parse();
		$serializeSinglePropertyOnly = $parsedContract->getContractAttribute()->serializeSinglePropertyOnly;
		$collectedType               = $parsedContract->getContractAttribute()->collectedType;
		$retransformedObject         = $parsedContract->getReflectedClass()->newInstanceWithoutConstructor();
		/**
		 * @var ParsedSerializationProperty $parsedPropertyFetched
		 */
		foreach ( $parsedContract->getParsedProperties() as $parsedPropertyFetched )
		{
			$serializationPropertyName = $parsedPropertyFetched->getPropertyAttribute()->name;
			if ( false === $serializeSinglePropertyOnly && false === isset( $data->{$serializationPropertyName} ) )
			{
				continue;
			}
			$serializationPropertyValue = true === $serializeSinglePropertyOnly ? $data : $data->{$serializationPropertyName};
			$serializationPropertyType  = $parsedPropertyFetched->getPropertyAttribute()->type;
			if ( null !== $serializationPropertyValue && '' === $serializationPropertyType && '' !== $collectedType )
			{
				$retransformedValue = [];
				/**
				 * @var array $serializationPropertyValue
				 */
				foreach ( $serializationPropertyValue as $serializationPropertyValueFetched )
				{
					$retransformedValue[] = $this->retransformObject( $serializationPropertyValueFetched, $collectedType );
				}
				$parsedPropertyFetched->setPropertyValue( $retransformedObject, $retransformedValue );
				continue;
			}
			if ( null !== $serializationPropertyValue && '' !== $serializationPropertyType )
			{
				$retransformedValue = $this->retransformObject( $serializationPropertyValue, $serializationPropertyType );
				$parsedPropertyFetched->setPropertyValue( $retransformedObject, $retransformedValue );
				continue;
			}
			if ( true === is_object( $serializationPropertyValue ) )
			{
				$retransformedValue = $this->retransformAssociativeArray( $serializationPropertyValue );
				$parsedPropertyFetched->setPropertyValue( $retransformedObject, $retransformedValue );
				continue;
			}
			if ( true === is_array( $serializationPropertyValue ) )
			{
				$retransformedValue = $this->retransformSequencialArray( $serializationPropertyValue );
				$parsedPropertyFetched->setPropertyValue( $retransformedObject, $retransformedValue );
				continue;
			}
			$parsedPropertyFetched->setPropertyValue( $retransformedObject, $serializationPropertyValue );
		}

		return $retransformedObject;
	}

	/**
	 * @inheritDoc
	 */
	public function deserialize( string $data, string $class ): object
	{
		try
		{
			return $this->retransformObject(
				( new JsonDecoder() )
					->decode( $data ),
				$class
			);
		}
		catch ( SerializationContractNotFoundException
		| NotASerializationContractException
		| AnnotationReaderInstantiationFailedException
		| SerializationContractHasNoPropertiesException
		| SerializationContractHasTooMuchPropertiesException
		| JsonException $exception )
		{
			throw new DeserializationFailedException(
				static::ERROR_DESERIALIZATION_FAILED,
				0,
				$exception
			);
		}
	}
}
