<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function is_bool;
use function is_string;

/**
 * Represents a bidirectional converter converting between boolean string and boolean.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntStringToBoolBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a boolean string into a boolean value.
	 * @param string $value The boolean string value which has to be converted.
	 * @return bool The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): bool
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_BOOL_INT_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValuesRegularExpressions::REGEX_BOOL_INT_STRING );
		}

		return ValidValues::BOOL_INT_STRING_TRUE === $value;
	}

	/**
	 * Converts from a boolean into a boolean string value.
	 * @param bool $value The boolean value which has to be converted.
	 * @return string The converted boolean string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOL_INT_STRING_FALSE
			: ValidValues::BOOL_INT_STRING_TRUE;
	}
}
