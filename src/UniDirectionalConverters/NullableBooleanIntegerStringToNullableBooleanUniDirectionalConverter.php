<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use CodeKandis\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\Validators\IsNullValidator;
use CodeKandis\Validators\IsStringValidator;
use Override;

/**
 * Represents a unidirectional converter converting a nullable boolean integer string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_INTEGER_STRING} into its corresponding nullable boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter extends AbstractConverter implements NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): ?bool
	{
		if (
			true === ( new IsNullValidator() )
				->validate( $value )
		)
		{
			return null;
		}

		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if (
			false === ( new IsMatchingRegularExpressionValidator( ValidValues::REGEX_BOOLEAN_INTEGER_STRING ) )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ValidValues::REGEX_BOOLEAN_INTEGER_STRING );
		}

		return ValidValues::BOOLEAN_INTEGER_STRING_TRUE === $value;
	}
}
