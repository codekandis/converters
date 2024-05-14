<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a float value into its corresponding float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`] - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FloatToFloatStringBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a float value into its corresponding float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`].
	 * @param float $value The float value which has to be converted.
	 * @return string The converted float string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): string;

	/**
	 * Converts from a float string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_FLOAT_STRING`] into its corresponding float value.
	 * @param string $value The float string value which has to be converted.
	 * @return float The converted float value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): float;
}
