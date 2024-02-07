<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use Override;
use function is_float;

/**
 * Represents a unidirectional converter converting a float into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatToStringUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Converts from a float into a string value.
	 * @param float $value The float value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if ( false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::FLOAT );
		}

		return (string) $value;
	}
}
