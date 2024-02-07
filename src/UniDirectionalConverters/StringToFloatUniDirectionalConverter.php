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

/**
 * Represents a uni-directional converter converting a string into a float.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToFloatUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a string into a float value.
	 * @param string $value The string value which has to be converted.
	 * @return float The converted float value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): float
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		}

		return (float) $value;
	}
}
