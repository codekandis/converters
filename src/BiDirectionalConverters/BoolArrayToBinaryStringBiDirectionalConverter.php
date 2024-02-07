<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_array;
use function is_bool;
use function is_string;
use function strlen;

/**
 * Represents a bi-directional converter converting between bool array and binary string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolArrayToBinaryStringBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a bool array into a binary string value.
	 * @param bool[] $value The bool array value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( $value )
	{
		if ( false === is_array( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOL_ARRAY );
		}

		foreach ( $value as $valueFetched )
		{
			if ( false === is_bool( $valueFetched ) )
			{
				throw $this->getInvalidTypeException( $value, ValidTypes::BOOL_ARRAY );
			}
		}

		$binaryString = '';
		foreach ( $value as $valueFetched )
		{
			$binaryString .= false === $valueFetched
				? '0'
				: '1';
		}

		return $binaryString;
	}

	/**
	 * Converts from a binary string into a bool array value.
	 * @param string $value The binary string value which has to be converted.
	 * @return bool[] The converted bool array value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( $value )
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
			$boolArray[] = '0' === $value[ $n ]
				? false
				: true;
		}

		return $boolArray;
	}
}
