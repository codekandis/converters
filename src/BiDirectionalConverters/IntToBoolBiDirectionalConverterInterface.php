<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting between `integer` and `boolean`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntToBoolBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from an `integer` into a `boolean` value.
	 * @param int $value The `integer` value which has to be converted.
	 * @return bool The converted `boolean` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): bool;

	/**
	 * Converts from a `boolean` into an `integer` value.
	 * @param bool $value The `boolean` value which has to be converted.
	 * @return int The converted `integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): int;
}
