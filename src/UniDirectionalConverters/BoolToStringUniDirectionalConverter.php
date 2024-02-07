<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use function is_bool;

/**
 * Represents a uni-directional converter converting a bool into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a bool into a string value.
	 * @param bool $value The bool value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( $value )
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOL );
		}

		return false === $value
			? 'false'
			: 'true';
	}
}
