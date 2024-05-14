<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`.
	 * @param ?bool $value The nullable boolean value which has to be converted.
	 * @return ?string The converted nullable boolean integer string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
