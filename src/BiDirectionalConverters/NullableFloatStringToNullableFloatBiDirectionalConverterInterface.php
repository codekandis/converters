<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a nullable float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`] into its corresponding nullable float value - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableFloatStringToNullableFloatBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`] into its corresponding nullable float value.
	 * @param ?string $value The nullable float string value which has to be converted.
	 * @return ?float The converted nullable float value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?float;

	/**
	 * Converts from a nullable float value into its corresponding nullable float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`].
	 * @param ?float $value The nullable float value which has to be converted.
	 * @return ?string The converted nullable float string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string;
}
