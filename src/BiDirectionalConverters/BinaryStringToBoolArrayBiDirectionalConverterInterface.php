<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bi-directional converter converting between `binary string` and `boolean array`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BinaryStringToBoolArrayBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `binary string` into a `boolean array` value.
	 * @param string $value The `binary string` value which has to be converted.
	 * @return bool[] The converted `boolean array` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): array;

	/**
	 * Converts from a `boolean array` into a `binary string` value.
	 * @param bool[] $value The `boolean array` value which has to be converted.
	 * @return string The converted `binary string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
