<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function in_array;
use function is_bool;
use function is_int;

/**
 * Represents a bi-directional converter converting between int and bool.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToBoolBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from an int into a bool value.
	 * @param int $value The int value which has to be converted.
	 * @return bool The converted bool value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): bool
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::INTEGER );
		}

		if ( false === in_array( $value, ValidValues::BOOL_INT_SET ) )
		{
			throw $this->getInvalidValueException( $value, ...ValidValues::BOOL_INT_STRING_SET );
		}

		return ValidValues::BOOL_INT_TRUE === $value;
	}

	/**
	 * Converts from a bool into an int value.
	 * @param bool $value The bool value which has to be converted.
	 * @return int The converted int value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): int
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOL_INT_FALSE
			: ValidValues::BOOL_INT_TRUE;
	}
}
