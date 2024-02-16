<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function bindec;
use function decbin;
use function is_int;
use function is_string;

/**
 * Represents a bidirectional converter converting between `integer` and `binary string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToBinaryStringBiDirectionalConverter extends AbstractConverter implements IntToBinaryStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): string
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
		}

		return decbin( $value );
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): int
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_BINARY_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValuesRegularExpressions::REGEX_BINARY_STRING );
		}

		return bindec( $value );
	}
}
