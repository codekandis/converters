<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\Types\ValidTypes;
use function is_bool;
use function is_int;

/**
 * Represents a bi-directional converter converting between bool and int.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolToIntBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a bool into an int value.
	 * @param bool $value The bool value which has to be converted.
	 * @return int The converted int value.
	 */
	public function convertTo( $value )
	{
		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOL );
		}

		return false === $value
			? 0
			: 1;
	}

	/**
	 * Converts from an int into a bool value.
	 * @param int $value The int value which has to be converted.
	 * @return bool The converted bool value.
	 */
	public function convertFrom( $value )
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
