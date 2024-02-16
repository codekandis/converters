<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function in_array;
use function is_bool;
use function is_string;

/**
 * Represents a bidirectional converter converting between `string` and `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToBoolBiDirectionalConverter extends AbstractConverter implements StringToBoolBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): bool
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_STRING_SET ) )
		{
			throw $this->getInvalidValueException( $value, ...ValidValues::BOOLEAN_STRING_SET );
		}

		return ValidValues::BOOLEAN_STRING_TRUE === $value;
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): string
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_STRING_FALSE
			: ValidValues::BOOLEAN_STRING_TRUE;
	}
}
