<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Validators\IsFloatValidator;
use Override;

/**
 * Represents a unidirectional converter converting a float value into its corresponding float string value matching the regular expression {@link ValidValues::REGEX_FLOAT_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatToFloatStringUniDirectionalConverter extends AbstractConverter implements FloatToFloatStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === ( new IsFloatValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::FLOAT );
		}

		return (string) $value;
	}
}
