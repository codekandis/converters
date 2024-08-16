<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a boolean value equal to `false` or `true` into its corresponding boolean integer string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_INTEGER_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanToBooleanIntegerStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean value equal to `false` or `true` into its corresponding boolean integer string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_INTEGER_STRING}.
	 * @param bool $value The boolean value which has to be converted.
	 * @return string The converted boolean integer string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
