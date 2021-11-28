<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use function is_int;

/**
 * Represents a uni-directional converter converting int to string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from an int into a string value.
	 * @param int $value The int value which has to be converted.
	 * @return string The converted string value.
	 */
	public function convert( $value )
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::INT );
		}

		return (string) $value;
	}
}
