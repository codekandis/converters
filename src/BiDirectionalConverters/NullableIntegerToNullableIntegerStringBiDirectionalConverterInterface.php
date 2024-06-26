<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any bidirectional converter converting a nullable integer value into its corresponding nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`] - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntegerToNullableIntegerStringBiDirectionalConverterInterface extends BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable integer value into its corresponding nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`].
	 * @param ?int $value The nullable integer value which has to be converted.
	 * @return ?string The converted nullable integer string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?string;

	/**
	 * Converts from a nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`] into its corresponding nullable integer value.
	 * @param ?string $value The nullable integer string value which has to be converted.
	 * @return ?int The converted nullable integer value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?int;
}
