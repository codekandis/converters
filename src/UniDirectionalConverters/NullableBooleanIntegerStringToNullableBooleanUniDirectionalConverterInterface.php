<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a nullable boolean integer string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_INTEGER_STRING} into its corresponding nullable boolean value equal to `false` or `true`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable boolean integer string value matching the regular expression {@link ValidValues::REGEX_BOOLEAN_INTEGER_STRING} into its corresponding nullable boolean value equal to `false` or `true`.
	 * @param ?string $value The nullable boolean integer string value which has to be converted.
	 * @return ?bool The converted nullable boolean value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): ?bool;
}
