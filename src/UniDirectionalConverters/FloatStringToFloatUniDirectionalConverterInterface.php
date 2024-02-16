<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `float string` into a `float`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FloatStringToFloatUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `float string` into a `float` value.
	 * @param string $value The `float string` value which has to be converted.
	 * @return float The converted `float` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): float;
}
