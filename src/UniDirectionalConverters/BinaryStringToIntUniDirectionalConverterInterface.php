<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any uni-directional converter converting a binary string into an integer.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BinaryStringToIntUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a binary string into an integer value.
	 * @param string $value The binary string value which has to be converted.
	 * @return int The converted integer value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): int;
}