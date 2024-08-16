<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a nullable integer value into its corresponding nullable integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableIntegerToNullableIntegerStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a nullable integer value into its corresponding nullable integer string value matching the regular expression {@link ValidValues::REGEX_INTEGER_STRING}.
	 * @param ?int $value The nullable integer value which has to be converted.
	 * @return ?string The converted nullable integer string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
