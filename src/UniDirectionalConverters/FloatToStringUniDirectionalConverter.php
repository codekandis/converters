<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use function is_float;

/**
 * Represents a uni-directional converter converting a float into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a float into a string value.
	 * @param float $value The float value which has to be converted.
	 * @return string The converted string value.
	 */
	public function convert( $value )
	{
		if ( false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::FLOAT );
		}

		return (string) $value;
	}
}
