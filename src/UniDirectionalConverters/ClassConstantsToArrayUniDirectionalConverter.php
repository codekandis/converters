<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Types\ClassNotFoundException;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Validators\IsClassValidator;
use CodeKandis\Validators\IsInArrayValidator;
use CodeKandis\Validators\IsStringValidator;
use Override;
use ReflectionClass;
use ReflectionException;

/**
 * Represents a unidirectional converter converting class constants into an array of corresponding key value pairs.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassConstantsToArrayUniDirectionalConverter extends AbstractConverter implements ClassConstantsToArrayUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 * @throws UnexpectedErrorException An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): array
	{
		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if (
			false === ( new IsClassValidator() )
				->validate( $value )
		)
		{
			throw ClassNotFoundException::with_className( $value );
		}

		try
		{
			$reflectionClass = new ReflectionClass( $value );
		}
		catch ( ReflectionException )
		{
			throw new UnexpectedErrorException();
		}

		$convertedValue         = [];
		$constantValueValidator = ( new IsInArrayValidator( $convertedValue ) );
		foreach ( $reflectionClass->getConstants() as $constantName => $constantValue )
		{
			if ( false === $constantValueValidator->validate( $constantValue ) )
			{
				$convertedValue[ $constantName ] = $constantValue;
			}
		}

		return $convertedValue;
	}
}
