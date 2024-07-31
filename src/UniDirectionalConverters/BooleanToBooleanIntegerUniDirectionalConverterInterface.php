<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a boolean value equal to `false` or `true` into its corresponding boolean integer value equal to `0` or `1`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanToBooleanIntegerUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean value equal to `false` or `true` into its corresponding boolean integer value equal to `0` or `1`.
	 * @param bool $value The boolean value which has to be converted.
	 * @return int The converted boolean integer value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): int;
}
