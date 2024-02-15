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
 * Represents a bidirectional converter converting between nullable boolean and nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBoolToNullableStringBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean into a nullable string value.
	 * @param ?bool $value The nullable boolean value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): ?string
	{
		if ( null !== $value && false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_BOOLEAN );
		}

		if ( null === $value )
		{
			return null;
		}

		return false === $value
			? ValidValues::BOOLEAN_STRING_FALSE
			: ValidValues::BOOLEAN_STRING_TRUE;
	}

	/**
	 * Converts from a nullable string into a nullable boolean value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?bool The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?bool
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_STRING_SET ) )
		{
			throw $this->getInvalidValueException( $value, ExpectedTypes::NULL, ...ValidValues::BOOLEAN_STRING_SET );
		}

		return ValidValues::BOOLEAN_STRING_TRUE === $value;
	}
}
