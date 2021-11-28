<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use function is_int;

/**
 * Represents a uni-directional converter converting nullable int to nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntToNullableStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable int into a nullable string value.
	 * @param ?int $value The nullable int value which has to be converted.
	 * @return ?string The converted nullable string value.
	 */
	public function convert( $value )
	{
		if ( null !== $value && false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_INT );
		}

		if ( null === $value )
		{
			return null;
		}

		return (string) $value;
	}
}
