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

/**
 * Represents a unidirectional converter converting a nullable boolean string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_STRING} into its corresponding nullable boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanStringToNullableBooleanUniDirectionalConverter extends AbstractConverter implements NullableBooleanStringToNullableBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?bool
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
			$regularExpression = new RegularExpression( ValidValues::REGEX_BOOLEAN_STRING );
			if ( null === $regularExpression->match( $value, false ) )
			{
				throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ValidValues::REGEX_BOOLEAN_STRING );
			}
		}
		catch ( RegularExpressionNotMatchingExceptionInterface | InvalidOffsetExceptionInterface )
		{
		}

		return ValidValues::BOOLEAN_STRING_TRUE === $value;
	}
}
