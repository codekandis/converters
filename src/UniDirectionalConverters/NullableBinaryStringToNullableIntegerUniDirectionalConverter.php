<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\RegularExpressions\RegularExpression;
use CodeKandis\RegularExpressions\RegularExpressionNotMatchingExceptionInterface;
use CodeKandis\Types\InvalidOffsetExceptionInterface;
use Override;
use function bindec;
use function is_string;

/**
 * Represents a unidirectional converter converting a nullable binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING} into its corresponding nullable integer value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBinaryStringToNullableIntegerUniDirectionalConverter extends AbstractConverter implements NullableBinaryStringToNullableIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?int
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

		return bindec( $value );
	}
}
