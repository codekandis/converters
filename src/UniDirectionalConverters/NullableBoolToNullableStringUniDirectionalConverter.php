<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use function is_bool;

/**
 * Represents a uni-directional converter converting a nullable boolean into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBoolToNullableStringUniDirectionalConverter extends AbstractConverter implements NullableBoolToNullableStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): ?string
	{
		if ( null !== $value && false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_BOOLEAN );
		}

		if ( null === $value )
		{
			return null;
		}

		return false === $value
			? ValidValues::BOOLEAN_STRING_FALSE
			: ValidValues::BOOLEAN_STRING_TRUE;
	}
}
