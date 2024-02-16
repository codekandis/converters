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
 * Represents a bi-directional converter converting between `integer string` and `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntStringToBoolBiDirectionalConverter extends AbstractConverter implements IntStringToBoolBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): bool
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

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_STRING_FALSE
			: ValidValues::BOOLEAN_INTEGER_STRING_TRUE;
	}
}
