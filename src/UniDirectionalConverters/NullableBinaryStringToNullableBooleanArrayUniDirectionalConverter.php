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
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): ?array
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
			false === ( new IsMatchingRegularExpressionValidator( ValidValues::REGEX_BINARY_STRING ) )
				->validate( $value )
		)
		{
			throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ValidValues::REGEX_BINARY_STRING );
		}

		$boolArray = [];
		for ( $n = 0; $n < strlen( $value ); ++$n )
		{
			$boolArray[] = ValidValues::BOOLEAN_INTEGER_STRING_FALSE !== $value[ $n ];
		}

		return $boolArray;
	}
}
