<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsArrayValidator;
use CodeKandis\Validators\IsBooleanValidator;
use CodeKandis\Validators\IsNullValidator;
use Override;

/**
 * Represents a unidirectional converter converting a nullable boolean array containing values equal to `false` or `true` into its corresponding nullable binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter extends AbstractConverter implements NullableBooleanArrayToNullableBinaryStringUniDirectionalConverterInterface
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
			false === ( new IsArrayValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY );
		}

		$elementValidator = new IsBooleanValidator();
		foreach ( $value as $valueFetched )
		{
			if ( false === $elementValidator->validate( $valueFetched ) )
			{
				throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY );
			}
		}

		$binaryString = '';
		foreach ( $value as $valueFetched )
		{
			$binaryString .= false === $valueFetched
				? ValidValues::BOOLEAN_INTEGER_STRING_FALSE
				: ValidValues::BOOLEAN_INTEGER_STRING_TRUE;
		}

		return $binaryString;
	}
}
