<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function bindec;
use function decbin;
use function is_int;
use function is_string;

/**
 * Represents a bidirectional converter converting between binary string and boolean.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToIntBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a binary string into a boolean value.
	 * @param string $value The binary string value which has to be converted.
	 * @return int The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): int
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

		return bindec( $value );
	}

	/**
	 * Converts from a boolean into a binary string value.
	 * @param int $value The boolean value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::INTEGER );
		}

		return decbin( $value );
	}
}
