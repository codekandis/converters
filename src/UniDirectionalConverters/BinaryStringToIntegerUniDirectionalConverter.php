<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\Validators\IsStringValidator;
use Override;
use function bindec;

/**
 * Represents a unidirectional converter converting a binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING} into its corresponding integer value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BinaryStringToIntegerUniDirectionalConverter extends AbstractConverter implements BinaryStringToIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 * @throws UnexpectedErrorException An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): int
	{
		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if (
			false === ( new IsMatchingRegularExpressionValidator( ValidValues::REGEX_BINARY_STRING ) )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, ValidValues::REGEX_BINARY_STRING );
		}

		return bindec( $value );
	}
}
