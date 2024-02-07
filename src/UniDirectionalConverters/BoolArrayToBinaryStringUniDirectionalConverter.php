<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use CodeKandis\Converters\ValidValues;
use function is_array;
use function is_bool;

/**
 * Represents a uni-directional converter converting a bool array into a binary string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolArrayToBinaryStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a bool array into a binary string value.
	 * @param bool[] $value The bool array value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( $value )
	{
		if ( false === is_array( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOLEAN_ARRAY );
		}

		foreach ( $value as $valueFetched )
		{
			if ( false === is_bool( $valueFetched ) )
			{
				throw $this->getInvalidTypeException( $value, ValidTypes::BOOLEAN_ARRAY );
			}
		}

		$binaryString = '';
		foreach ( $value as $valueFetched )
		{
			$binaryString .= false === $valueFetched
				? ValidValues::BOOL_INT_STRING_FALSE
				: ValidValues::BOOL_INT_STRING_TRUE;
		}

		return $binaryString;
	}
}
