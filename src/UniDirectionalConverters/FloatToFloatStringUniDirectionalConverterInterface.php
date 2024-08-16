<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting a float value into its corresponding float string value matching the regular expression {@link ValidValues::REGEX_FLOAT_STRING}.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FloatToFloatStringUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts from a float value into its corresponding float string value matching the regular expression {@link ValidValues::REGEX_FLOAT_STRING}.
	 * @param float $value The float value which has to be converted.
	 * @return string The converted float string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): string;
}
