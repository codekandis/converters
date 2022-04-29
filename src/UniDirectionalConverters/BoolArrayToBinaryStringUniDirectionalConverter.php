<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
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
	 */
	public function convert( $value )
	{
		if ( false === is_array( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::BOOL_ARRAY );
		}

		foreach ( $value as $valueFetched )
		{
			if ( false === is_bool( $valueFetched ) )
			{
				throw $this->getInvalidTypeException( $value, ValidTypes::BOOL_ARRAY );
			}
		}

		$binaryString = '';
		foreach ( $value as $valueFetched )
		{
			$binaryString .= false === $valueFetched
				? '0'
				: '1';
		}

		return $binaryString;
	}
}
