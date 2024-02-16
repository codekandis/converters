<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any uni-directional converter converting a nullable float into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableFloatToNullableStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable float into a nullable string value.
	 * @param ?float $value The nullable float value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
