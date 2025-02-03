<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsBooleanValidator;
use CodeKandis\Validators\IsNullValidator;
use Override;

/**
 * Represents a unidirectional converter converting a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_INTEGER_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter extends AbstractConverter implements NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if (
			true === ( new IsNullValidator() )
				->validate( $value )
		)
		{
			return null;
		}

		if (
			false === ( new IsBooleanValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_STRING_FALSE
			: ValidValues::BOOLEAN_INTEGER_STRING_TRUE;
	}
}
