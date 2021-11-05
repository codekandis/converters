<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\Types\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_float;
use function is_string;

/**
 * Represents a bi-directional converter converting between string and float.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToFloatBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a string into a float value.
	 * @param string $value The string value which has to be converted.
	 * @return float The converted float value.
	 */
	public function convertTo( $value )
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

	/**
	 * Converts from a float into a string value.
	 * @param float $value The float value which has to be converted.
	 * @return string The converted string value.
	 */
	public function convertFrom( $value )
	{
		if ( false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::FLOAT );
		}

		return (string) $value;
	}
}
