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
 * Represents a unidirectional converter converting a float string value matching the regular expression {@link ValidValues::REGEX_FLOAT_STRING} into its corresponding float value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatStringToFloatUniDirectionalConverter extends AbstractConverter implements FloatStringToFloatUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): float
	{
		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if (
			false === ( new IsMatchingRegularExpressionValidator( ValidValues::REGEX_FLOAT_STRING ) )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, ValidValues::REGEX_FLOAT_STRING );
		}

		return (float) $value;
	}
}
