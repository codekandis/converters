<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function is_string;
use function strlen;

/**
 * Represents a unidirectional converter converting a `nullable binary string` into a `nullable boolean array`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter extends AbstractConverter implements NullableBinaryStringToNullableBooleanArrayUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?array
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_BINARY_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ValidValuesRegularExpressions::REGEX_BINARY_STRING );
		}

		$boolArray = [];
		for ( $n = 0; $n < strlen( $value ); ++$n )
		{
			$boolArray[] = ValidValues::BOOLEAN_INTEGER_STRING_FALSE !== $value[ $n ];
		}

		return $boolArray;
	}
}
