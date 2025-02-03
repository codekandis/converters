<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsInArrayValidator;
use CodeKandis\Validators\IsIntegerValidator;
use CodeKandis\Validators\IsNullValidator;
use Override;
use function array_map;

/**
 * Represents a unidirectional converter converting a nullable boolean integer value equal to `0` or `1` into its corresponding nullable boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerToNullableBooleanUniDirectionalConverter extends AbstractConverter implements NullableBooleanIntegerToNullableBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?bool
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

		if (
			false === ( new IsInArrayValidator( ValidValues::BOOLEAN_INTEGER_SET ) )
				->validate( $value )
		)
		{
			$expectedValues = array_map(
				fn( $expectedValue ): string => (string) $expectedValue,
				ValidValues::BOOLEAN_INTEGER_SET
			);

			throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ...$expectedValues );
		}

		return ValidValues::BOOLEAN_INTEGER_TRUE === $value;
	}
}
