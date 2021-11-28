<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use function is_bool;

/**
 * Represents a uni-directional converter converting bool to string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a bool into a string value.
	 * @param bool $value The bool value which has to be converted.
	 * @return string The converted string value.
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
