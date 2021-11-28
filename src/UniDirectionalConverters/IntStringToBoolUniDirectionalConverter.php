<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\Types\ValidValuesRegularExpressions;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_string;

/**
 * Represents a uni-directional converter converting an int string to bool.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntStringToBoolUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from an int string into a bool value.
	 * @param string $value The int string value which has to be converted.
	 * @return bool The converted bool value.
	 */
	public function convert( $value )
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

		return '1' === $value;
	}
}
