<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsBooleanValidator;
use Override;

/**
 * Represents a unidirectional converter converting a boolean value equal to `false` or `true` into its corresponding boolean string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanToBooleanStringUniDirectionalConverter extends AbstractConverter implements BooleanToBooleanStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === ( new IsBooleanValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_STRING_FALSE
			: ValidValues::BOOLEAN_STRING_TRUE;
	}
}
