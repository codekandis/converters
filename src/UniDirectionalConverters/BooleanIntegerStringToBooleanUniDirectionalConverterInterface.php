<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a boolean integer string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING` into its corresponding boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BooleanIntegerStringToBooleanUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a boolean integer string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING` into its corresponding boolean value equal to `false` or `true`.
	 * @param string $value The boolean integer string value which has to be converted.
	 * @return bool The converted boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): bool;
}
