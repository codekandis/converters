<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use function is_bool;

/**
 * Represents a uni-directional converter converting a nullable bool into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBoolToNullableIntStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable bool into a nullable string value.
	 * @param ?bool $value The nullable bool value which has to be converted.
	 * @return ?string The converted nullable string value.
	 */
	public function convert( $value )
	{
		if ( null !== $value && false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_BOOL );
		}

		if ( null === $value )
		{
			return null;
		}

		return false === $value
			? '0'
			: '1';
	}
}
