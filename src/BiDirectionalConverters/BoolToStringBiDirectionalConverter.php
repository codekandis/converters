<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\Types\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_bool;
use function is_string;

/**
 * Represents a bi-directional converter converting between bool and string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToStringBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a bool into a string value.
	 * @param bool $value The bool value which has to be converted.
	 * @return string The converted string value.
	 */
	public function convertTo( $value )
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOL );
		}

		return false === $value
			? 'false'
			: 'true';
	}

	/**
	 * Converts from a string into a bool value.
	 * @param string $value The string value which has to be converted.
	 * @return bool The converted bool value.
	 */
	public function convertFrom( $value )
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_BOOL_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValuesRegularExpressions::REGEX_BOOL_STRING );
		}

		return 'true' === $value;
	}
}
