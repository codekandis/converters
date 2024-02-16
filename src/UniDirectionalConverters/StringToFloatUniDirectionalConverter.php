<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_string;

/**
 * Represents a uni-directional converter converting a string into a float.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToFloatUniDirectionalConverter extends AbstractConverter implements StringToFloatUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): float
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValuesRegularExpressions::REGEX_FLOAT_STRING );
		}

		return (float) $value;
	}
}
