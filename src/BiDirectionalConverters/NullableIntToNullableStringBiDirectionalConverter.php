<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use Override;
use function is_int;
use function is_string;

/**
 * Represents a bidirectional converter converting between nullable boolean and nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntToNullableStringBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean into a nullable string value.
	 * @param ?int $value The nullable boolean value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): ?string
	{
		if ( null !== $value && false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_INTEGER );
		}

		if ( null === $value )
		{
			return null;
		}

		return (string) $value;
	}

	/**
	 * Converts from a nullable string into a nullable boolean value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?int The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?int
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ExpectedTypes::NULL, ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		}

		return (int) $value;
	}
}
