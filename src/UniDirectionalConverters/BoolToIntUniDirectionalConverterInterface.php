<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a boolean into an integer.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BoolToIntUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean into an integer value.
	 * @param bool $value The boolean value which has to be converted.
	 * @return int The converted integer value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): int;
}
