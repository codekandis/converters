<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use function is_float;

/**
 * Represents a uni-directional converter converting a nullable float into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatToNullableStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable float into a nullable string value.
	 * @param ?float $value The nullable float value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string
	{
		if ( null !== $value && false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_FLOAT );
		}

		if ( null === $value )
		{
			return null;
		}

		return (string) $value;
	}
}
