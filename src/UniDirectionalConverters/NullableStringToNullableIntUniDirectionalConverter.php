<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function is_string;

/**
 * Represents a unidirectional converter converting a nullable string into a nullable boolean.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableIntUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable string into a nullable boolean value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?int The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): ?int
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_INT_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidTypes::NULL, ValidValuesRegularExpressions::REGEX_INT_STRING );
		}

		return (int) $value;
	}
}
