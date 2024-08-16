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
 * Represents a unidirectional converter converting a binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING} into its corresponding integer value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToIntegerUniDirectionalConverter extends AbstractConverter implements BinaryStringToIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): int
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		try
		{
			$regularExpression = new RegularExpression( ValidValues::REGEX_BINARY_STRING );
			if ( null === $regularExpression->match( $value, false ) )
			{
				throw $this->getInvalidValueException( $value, ValidValues::REGEX_BINARY_STRING );
			}
		}
		catch ( RegularExpressionNotMatchingExceptionInterface | InvalidOffsetExceptionInterface )
		{
		}

		return bindec( $value );
	}
}
