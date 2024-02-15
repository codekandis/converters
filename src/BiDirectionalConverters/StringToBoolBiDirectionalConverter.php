<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use Override;
use function in_array;
use function is_bool;
use function is_string;

/**
 * Represents a bidirectional converter converting between string and boolean.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToBoolBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a string into a boolean value.
	 * @param string $value The string value which has to be converted.
	 * @return bool The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): bool
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if ( false === in_array( $value, ValidValues::BOOL_STRING_SET ) )
		{
			throw $this->getInvalidValueException( $value, ...ValidValues::BOOL_STRING_SET );
		}

		return ValidValues::BOOL_STRING_TRUE === $value;
	}

	/**
	 * Converts from a boolean into a string value.
	 * @param bool $value The boolean value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOL_STRING_FALSE
			: ValidValues::BOOL_STRING_TRUE;
	}
}
