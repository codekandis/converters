<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsInArrayValidator;
use CodeKandis\Validators\IsIntegerValidator;
use Override;
use function array_map;

/**
 * Represents a unidirectional converter converting a boolean integer value equal to `0` or `1` into its corresponding boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanIntegerToBooleanUniDirectionalConverter extends AbstractConverter implements BooleanIntegerToBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): bool
	{
		if (
			false === ( new IsIntegerValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
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

			throw $this->getInvalidValueException( $value, ...$expectedValues );
		}

		return ValidValues::BOOLEAN_INTEGER_TRUE === $value;
	}
}
