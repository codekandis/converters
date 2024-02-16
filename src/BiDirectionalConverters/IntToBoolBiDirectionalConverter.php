<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function in_array;
use function is_bool;
use function is_int;

/**
 * Represents a bidirectional converter converting between `integer` and `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToBoolBiDirectionalConverter extends AbstractConverter implements IntToBoolBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): bool
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

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): int
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_FALSE
			: ValidValues::BOOLEAN_INTEGER_TRUE;
	}
}
