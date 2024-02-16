<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a `boolean` into a `boolean string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanToBooleanStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a `boolean` into a `boolean string` value.
	 * @param bool $value The `boolean` value which has to be converted.
	 * @return string The converted `boolean string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
