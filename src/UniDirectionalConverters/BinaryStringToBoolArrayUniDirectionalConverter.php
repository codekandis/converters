<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function is_string;
use function strlen;

/**
 * Represents a unidirectional converter converting a binary string into a boolean array.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToBoolArrayUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a binary string into a boolean array value.
	 * @param string $value The binary string value which has to be converted.
	 * @return bool[] The converted boolean array value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): array
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
