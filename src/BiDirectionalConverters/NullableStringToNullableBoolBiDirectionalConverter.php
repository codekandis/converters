<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function in_array;
use function is_bool;
use function is_string;

/**
 * Represents a bidirectional converter converting between `nullable string` and `nullable boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableBoolBiDirectionalConverter extends AbstractConverter implements NullableStringToNullableBoolBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): ?bool
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_STRING_SET ) )
		{
			throw $this->getInvalidValueException( $value, ExpectedTypes::NULL, ...ValidValues::BOOLEAN_STRING_SET );
		}

		return ValidValues::BOOLEAN_STRING_TRUE === $value;
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): ?string
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_STRING_FALSE
			: ValidValues::BOOLEAN_STRING_TRUE;
	}
}
