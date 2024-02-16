<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_int;
use function is_string;

/**
 * Represents a bi-directional converter converting between `string` and `integer`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToIntBiDirectionalConverter extends AbstractConverter implements StringToIntBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): int
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		}

		return (int) $value;
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): string
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
		}

		return (string) $value;
	}
}
