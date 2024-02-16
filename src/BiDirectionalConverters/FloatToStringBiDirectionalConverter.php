<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_float;
use function is_string;

/**
 * Represents a bi-directional converter converting between `float` and `string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatToStringBiDirectionalConverter extends AbstractConverter implements FloatToStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): string
	{
		if ( false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::FLOAT );
		}

		return (string) $value;
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): float
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
