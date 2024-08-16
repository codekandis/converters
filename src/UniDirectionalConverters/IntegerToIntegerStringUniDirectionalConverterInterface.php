<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an integer value into its corresponding integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IntegerToIntegerStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from an integer value into its corresponding integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING}.
	 * @param int $value The integer value which has to be converted.
	 * @return string The converted integer string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
