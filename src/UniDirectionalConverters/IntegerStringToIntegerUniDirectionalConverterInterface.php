<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING} into its corresponding integer value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntegerStringToIntegerUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from an integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING} into its corresponding integer value.
	 * @param string $value The integer string value which has to be converted.
	 * @return int The converted integer value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): int;
}
