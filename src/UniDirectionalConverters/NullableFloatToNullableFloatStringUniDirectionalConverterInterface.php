<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a nullable float value into its corresponding nullable float string value matching the regular expression `ValidValuesRegularExpressions::REGEX_FLOAT_STRING`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableFloatToNullableFloatStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable float value into its corresponding nullable float string value matching the regular expression `ValidValuesRegularExpressions::REGEX_FLOAT_STRING`.
	 * @param ?float $value The nullable float value which has to be converted.
	 * @return ?string The converted nullable float string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
