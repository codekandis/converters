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
 * Represents a unidirectional converter converting a boolean integer string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_INTEGER_STRING} into its corresponding boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanIntegerStringToBooleanUniDirectionalConverter extends AbstractConverter implements BooleanIntegerStringToBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): bool
	{
		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if (
			false === ( new IsMatchingRegularExpressionValidator( ValidValues::REGEX_BOOLEAN_INTEGER_STRING ) )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, ValidValues::REGEX_BOOLEAN_INTEGER_STRING );
		}

		return ValidValues::BOOLEAN_INTEGER_STRING_TRUE === $value;
	}
}
