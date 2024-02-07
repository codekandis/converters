<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function is_bool;

/**
 * Represents a unidirectional converter converting a boolean into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean into a string value.
	 * @param bool $value The boolean value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOL_STRING_FALSE
			: ValidValues::BOOL_STRING_TRUE;
	}
}
