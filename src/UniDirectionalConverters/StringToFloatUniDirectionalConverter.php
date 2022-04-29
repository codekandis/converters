<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\Types\ValidValuesRegularExpressions;
use CodeKandis\Converters\UniDirectionalConverterInterface;
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
	 */
	public function convert( $value )
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
