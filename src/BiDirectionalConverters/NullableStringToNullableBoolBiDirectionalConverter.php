<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function in_array;
use function is_bool;
use function is_string;

/**
 * Represents a bi-directional converter converting between `nullable string` and `nullable boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableBoolBiDirectionalConverter extends AbstractConverter implements NullableStringToNullableBoolBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?bool
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

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?string
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
}
