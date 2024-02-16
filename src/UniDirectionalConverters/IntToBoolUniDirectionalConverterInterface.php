<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an integer into a boolean.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntToBoolUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from an integer into a boolean value.
	 * @param int $value The integer value which has to be converted.
	 * @return bool The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): bool;
}
