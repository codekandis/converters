<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\EnumerationClassNotFoundException;
use CodeKandis\Converters\EnumerationClassNotFoundExceptionInterface;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use Override;
use ReflectionClass;
use ReflectionException;
use function in_array;
use function is_string;

/**
 * Represents a unidirectional converter converting an enumeration class into an array of values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumerationClassToArrayUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts an enumeration class into an array of values.
	 * @param mixed $value The class name of the enumeration class which has to be converted.
	 * @return mixed The converted array of values.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws EnumerationClassNotFoundExceptionInterface The enumeration class does not exist.
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
			$reflectedClass = new ReflectionClass( $value );
		}
		catch ( ReflectionException )
		{
			throw EnumerationClassNotFoundException::with_enumerationClassClassName( $value );
		}

		$convertedValue = [];
		foreach ( $reflectedClass->getConstants() as $constantValue )
		{
			if ( false === in_array( $constantValue, $convertedValue, true ) )
			{
				$convertedValue[] = $constantValue;
			}
		}

		return $convertedValue;
	}
}
