<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a boolean array into a binary string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BoolArrayToBinaryStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean array into a binary string value.
	 * @param bool[] $value The boolean array value which has to be converted.
	 * @return string The converted binary string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
