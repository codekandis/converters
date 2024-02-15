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
use function is_int;

/**
 * Represents a bidirectional converter converting between boolean and boolean.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToIntBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a boolean into a boolean value.
	 * @param bool $value The boolean value which has to be converted.
	 * @return int The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): int
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_FALSE
			: ValidValues::BOOLEAN_INTEGER_TRUE;
	}

	/**
	 * Converts from a boolean into a boolean value.
	 * @param int $value The boolean value which has to be converted.
	 * @return bool The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): bool
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_INTEGER_SET ) )
		{
			throw $this->getInvalidValueException( $value, ...ValidValues::BOOLEAN_INTEGER_STRING_SET );
		}

		return ValidValues::BOOLEAN_INTEGER_TRUE === $value;
	}
}
