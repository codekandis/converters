<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting between `string` and `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringToBoolBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `string` into a `boolean` value.
	 * @param string $value The `string` value which has to be converted.
	 * @return bool The converted `boolean` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): bool;

	/**
	 * Converts from a `boolean` into a `string` value.
	 * @param bool $value The `boolean` value which has to be converted.
	 * @return string The converted `string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
