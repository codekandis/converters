<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Validators\IsIntegerValidator;
use CodeKandis\Validators\IsNullValidator;
use Override;

/**
 * Represents a unidirectional converter converting a nullable integer value into its corresponding nullable integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerToNullableIntegerStringUniDirectionalConverter extends AbstractConverter implements NullableIntegerToNullableIntegerStringUniDirectionalConverterInterface
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
			false === ( new IsIntegerValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_INTEGER );
		}

		return (string) $value;
	}
}
