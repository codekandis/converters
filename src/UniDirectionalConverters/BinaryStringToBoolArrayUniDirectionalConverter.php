<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_string;
use function strlen;

/**
 * Represents a uni-directional converter converting a binary string into a bool array.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToBoolArrayUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a binary string into a bool array value.
	 * @param string $value The binary string value which has to be converted.
	 * @return bool[] The converted bool array value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( $value )
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
