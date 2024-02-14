<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use Override;
use function is_array;
use function is_bool;

/**
 * Represents a unidirectional converter converting a boolean array into a binary string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolArrayToBinaryStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean array into a binary string value.
	 * @param bool[] $value The boolean array value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if ( false === is_array( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN_ARRAY );
		}

		foreach ( $value as $valueFetched )
		{
			if ( false === is_bool( $valueFetched ) )
			{
				throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN_ARRAY );
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
