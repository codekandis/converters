<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ClassNotFoundException;
use CodeKandis\Converters\ExpectedTypes;
use Override;
use ReflectionClass;
use ReflectionException;
use function in_array;
use function is_string;

/**
 * Represents a unidirectional converter converting an `enumeration class` into an `array` of values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassConstantsToArrayUniDirectionalConverter extends AbstractConverter implements ClassConstantsToArrayUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): array
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		try
		{
			$reflectionClass = new ReflectionClass( $value );
		}
		catch ( ReflectionException )
		{
			throw ClassNotFoundException::with_className( $value );
		}

		$convertedValue = [];
		foreach ( $reflectionClass->getConstants() as $constantName => $constantValue )
		{
			if ( false === in_array( $constantValue, $convertedValue, true ) )
			{
				$convertedValue[ $constantName ] = $constantValue;
			}
		}

		return $convertedValue;
	}
}
