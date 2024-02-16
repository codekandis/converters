<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function in_array;
use function is_string;

/**
 * Represents a unidirectional converter converting a `nullable boolean integer string` into a `nullable boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter extends AbstractConverter implements NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverterInterface
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

		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_INTEGER_STRING_SET ) )
		{
			throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ...ValidValues::BOOLEAN_INTEGER_STRING_SET );
		}

		return ValidValues::BOOLEAN_INTEGER_STRING_TRUE === $value;
	}
}
