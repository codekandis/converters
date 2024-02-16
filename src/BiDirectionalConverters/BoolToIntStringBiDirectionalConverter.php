<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function in_array;
use function is_bool;
use function is_string;

/**
 * Represents a bidirectional converter converting between `boolean` and `integer string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToIntStringBiDirectionalConverter extends AbstractConverter implements BoolToIntStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): string
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_STRING_FALSE
			: ValidValues::BOOLEAN_INTEGER_STRING_TRUE;
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): bool
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_INTEGER_STRING_SET ) )
		{
			throw $this->getInvalidValueException( $value, ...ValidValues::BOOLEAN_INTEGER_STRING_SET );
		}

		return ValidValues::BOOLEAN_INTEGER_STRING_TRUE === $value;
	}
}
