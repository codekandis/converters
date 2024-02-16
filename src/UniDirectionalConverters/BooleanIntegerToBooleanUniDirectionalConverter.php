<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function in_array;
use function is_int;

/**
 * Represents a unidirectional converter converting a `boolean integer` into a `boolean`.
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
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_INTEGER_SET ) )
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
