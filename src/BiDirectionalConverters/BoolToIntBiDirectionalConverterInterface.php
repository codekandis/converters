<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bi-directional converter converting between `boolean` and `integer`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BoolToIntBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a `boolean` into an `integer` value.
	 * @param bool $value The `boolean` value which has to be converted.
	 * @return int The converted `integer` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): int;

	/**
	 * Converts from an `integer` into a `boolean` value.
	 * @param int $value The `integer` value which has to be converted.
	 * @return bool The converted `boolean` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): bool;
}