<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function array_map;
use function in_array;
use function is_int;

/**
 * Represents a unidirectional converter converting a `nullable boolean integer` into a `nullable boolean`.
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
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_INTEGER );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_INTEGER_SET ) )
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
