<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting between `float` and `float string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FloatToFloatStringBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `float` into a `float string` value.
	 * @param float $value The `float` value which has to be converted.
	 * @return string The converted `float string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): string;

	/**
	 * Converts from a `float string` into a `float` value.
	 * @param string $value The `float string` value which has to be converted.
	 * @return float The converted `float` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): float;
}
