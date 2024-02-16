<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `float` into a `float string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FloatToFloatStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `float` into a `float string` value.
	 * @param float $value The `float` value which has to be converted.
	 * @return string The converted `float string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
