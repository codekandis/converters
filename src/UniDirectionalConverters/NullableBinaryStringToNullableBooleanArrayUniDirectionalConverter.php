<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\RegularExpressions\RegularExpression;
use CodeKandis\RegularExpressions\RegularExpressionNotMatchingExceptionInterface;
use CodeKandis\Types\InvalidOffsetExceptionInterface;
use Override;
use function is_string;
use function strlen;

/**
 * Represents a unidirectional converter converting a nullable binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING} into its corresponding nullable boolean array containing values equal to `false` or `true`.
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

		try
		{
			$regularExpression = new RegularExpression( ValidValues::REGEX_BINARY_STRING );
			if ( null === $regularExpression->match( $value, false ) )
			{
				throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ValidValues::REGEX_BINARY_STRING );
			}
		}
		catch ( RegularExpressionNotMatchingExceptionInterface | InvalidOffsetExceptionInterface )
		{
		}

		$boolArray = [];
		for ( $n = 0; $n < strlen( $value ); ++$n )
		{
			$boolArray[] = ValidValues::BOOLEAN_INTEGER_STRING_FALSE !== $value[ $n ];
		}

		return $boolArray;
	}
}
