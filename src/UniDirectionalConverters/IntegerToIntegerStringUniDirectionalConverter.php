<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Validators\IsIntegerValidator;
use Override;

/**
 * Represents a unidirectional converter converting an integer value into its corresponding integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerToIntegerStringUniDirectionalConverter extends AbstractConverter implements IntegerToIntegerStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if (
			false === ( new IsIntegerValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
		}

		return (string) $value;
	}
}
