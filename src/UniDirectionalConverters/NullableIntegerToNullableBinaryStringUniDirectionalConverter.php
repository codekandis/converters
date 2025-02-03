<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Validators\IsIntegerValidator;
use CodeKandis\Validators\IsNullValidator;
use Override;
use function decbin;

/**
 * Represents a unidirectional converter converting a nullable integer value into its corresponding nullable binary string value matching the regular expression {@link ValidValues::REGEX_BINARY_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerToNullableBinaryStringUniDirectionalConverter extends AbstractConverter implements NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface
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

		return decbin( $value );
	}
}
