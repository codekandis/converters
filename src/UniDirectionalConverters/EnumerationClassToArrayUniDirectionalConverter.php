<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\EnumerationClassNotFoundException;
use CodeKandis\Converters\EnumerationClassNotFoundExceptionInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use Override;
use ReflectionClass;
use ReflectionException;
use function in_array;
use function is_string;

/**
 * Represents a uni-directional converter converting enums into arrays of values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumerationClassToArrayUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * {@inheritDoc}
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws EnumerationClassNotFoundExceptionInterface The enumeration class does not exist.
	 */
	#[Override]
	public function convert( mixed $value ): array
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		try
		{
			$reflectionClass = new ReflectionClass( $value );
		}
		catch ( ReflectionException )
		{
			throw EnumerationClassNotFoundException::with_enumerationClassClassName( $value );
		}

		$convertedValue = [];
		foreach ( $reflectionClass->getConstants() as $constantValue )
		{
			if ( false === in_array( $constantValue, $convertedValue, true ) )
			{
				$convertedValue[] = $constantValue;
			}
		}

		return $convertedValue;
	}
}
