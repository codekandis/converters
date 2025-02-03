<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use CodeKandis\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\Validators\IsStringValidator;
use Override;

/**
 * Represents a unidirectional converter converting an integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING} into its corresponding integer value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerStringToIntegerUniDirectionalConverter extends AbstractConverter implements IntegerStringToIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
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
			false === ( new IsMatchingRegularExpressionValidator( ValidValues::REGEX_INTEGER_STRING ) )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, ValidValues::REGEX_INTEGER_STRING );
		}

		return (int) $value;
	}
}
