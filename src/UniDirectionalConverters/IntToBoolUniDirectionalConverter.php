<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
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
	 */
	public function convert( $value )
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::INT );
		}

		if ( 0 !== $value && 1 !== $value )
		{
			throw $this->getInvalidValueException( $value, '0, 1' );
		}

		return 1 === $value;
	}
}
