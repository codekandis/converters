<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\InvalidValueExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function in_array;
use function is_int;

/**
 * Represents a uni-directional converter converting an int into a bool.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToBoolUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from an int into a bool value.
	 * @param int $value The int value which has to be converted.
	 * @return bool The converted bool value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): bool
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
}
