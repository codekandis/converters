<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bi-directional converter converting between `string` and `float`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringToFloatBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `string` into a `float` value.
	 * @param string $value The `string` value which has to be converted.
	 * @return float The converted `float` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): float;

	/**
	 * Converts from a `float` into a `string` value.
	 * @param float $value The `float` value which has to be converted.
	 * @return string The converted `string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
