<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use Override;
use function in_array;
use function is_int;

/**
 * Represents a unidirectional converter converting a boolean into a boolean.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToBoolUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean into a boolean value.
	 * @param int $value The boolean value which has to be converted.
	 * @return bool The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): bool
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
