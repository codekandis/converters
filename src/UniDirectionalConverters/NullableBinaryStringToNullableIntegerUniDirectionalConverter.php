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
use function bindec;

/**
 * Represents a unidirectional converter converting a nullable binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING} into its corresponding nullable integer value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBinaryStringToNullableIntegerUniDirectionalConverter extends AbstractConverter implements NullableBinaryStringToNullableIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 * @throws UnexpectedErrorExceptionInterface An unexpected error occured.
	 */
	#[Override]
	public function convert( mixed $value ): ?int
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

		return bindec( $value );
	}
}
