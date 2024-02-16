<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an `integer` into an `integer string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntegerToIntegerStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from an `integer` into an `integer string` value.
	 * @param int $value The `integer` value which has to be converted.
	 * @return string The converted `integer string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
