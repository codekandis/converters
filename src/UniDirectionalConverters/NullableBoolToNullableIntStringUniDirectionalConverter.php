<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function is_bool;

/**
 * Represents a unidirectional converter converting a nullable boolean into a nullable integer string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBoolToNullableIntStringUniDirectionalConverter extends AbstractConverter implements NullableBoolToNullableIntStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): ?string
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_BOOLEAN );
		}

		return false === $value
			? ValidValues::BOOLEAN_INTEGER_STRING_FALSE
			: ValidValues::BOOLEAN_INTEGER_STRING_TRUE;
	}
}
