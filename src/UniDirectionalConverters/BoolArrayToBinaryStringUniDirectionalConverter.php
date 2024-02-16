<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function is_array;
use function is_bool;

/**
 * Represents a uni-directional converter converting a boolean array into a binary string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BoolArrayToBinaryStringUniDirectionalConverter extends AbstractConverter implements BoolArrayToBinaryStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
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
				? ValidValues::BOOLEAN_INTEGER_STRING_FALSE
				: ValidValues::BOOLEAN_INTEGER_STRING_TRUE;
		}

		return $binaryString;
	}
}
