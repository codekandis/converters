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
use function is_array;
use function is_bool;
use function is_string;
use function strlen;

/**
 * Represents a bidirectional converter converting between boolean array and binary string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolArrayToBinaryStringBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a boolean array into a binary string value.
	 * @param bool[] $value The boolean array value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		if ( false === is_array( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOLEAN_ARRAY );
		}

		foreach ( $value as $valueFetched )
		{
			if ( false === is_bool( $valueFetched ) )
			{
				throw $this->getInvalidTypeException( $value, ValidTypes::BOOLEAN_ARRAY );
			}
		}

		$binaryString = '';
		foreach ( $value as $valueFetched )
		{
			$binaryString .= false === $valueFetched
				? ValidValues::BOOL_INT_STRING_FALSE
				: ValidValues::BOOL_INT_STRING_TRUE;
		}

		return $binaryString;
	}

	/**
	 * Converts from a binary string into a boolean array value.
	 * @param string $value The binary string value which has to be converted.
	 * @return bool[] The converted boolean array value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): array
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_BINARY_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValuesRegularExpressions::REGEX_BINARY_STRING );
		}

		$boolArray = [];
		for ( $n = 0; $n < strlen( $value ); $n++ )
		{
			$boolArray[] = ValidValues::BOOL_INT_STRING_FALSE === $value[ $n ]
				? false
				: true;
		}

		return $boolArray;
	}
}
