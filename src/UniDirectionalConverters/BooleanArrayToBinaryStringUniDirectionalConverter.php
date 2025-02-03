<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsArrayValidator;
use CodeKandis\Validators\IsBooleanValidator;
use Override;

/**
 * Represents a unidirectional converter converting a boolean array containing values equal to `false` or `true` into its corresponding binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanArrayToBinaryStringUniDirectionalConverter extends AbstractConverter implements BooleanArrayToBinaryStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === ( new IsArrayValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN_ARRAY );
		}

		$elementValidator = new IsBooleanValidator();
		foreach ( $value as $valueFetched )
		{
			if ( false === $elementValidator->validate( $valueFetched ) )
			{
				throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN_ARRAY );
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
