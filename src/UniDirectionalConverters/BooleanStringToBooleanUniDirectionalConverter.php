<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use Override;
use function in_array;
use function is_string;

/**
 * Represents a unidirectional converter converting a `boolean string` into a `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanStringToBooleanUniDirectionalConverter extends AbstractConverter implements BooleanStringToBooleanUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): bool
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		if ( false === in_array( $value, ValidValues::BOOLEAN_STRING_SET ) )
		{
			throw $this->getInvalidValueException( $value, ...ValidValues::BOOLEAN_STRING_SET );
		}

		return ValidValues::BOOLEAN_STRING_TRUE === $value;
	}
}
