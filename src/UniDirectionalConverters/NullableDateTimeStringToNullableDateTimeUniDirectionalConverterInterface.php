<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueExceptionInterface;
use DateTime;

/**
 * Represents the interface of any unidirectional converter converting a nullable `DateTime` string value into its corresponding nullable `DateTime` value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a nullable `DateTime` string value into its corresponding nullable `DateTime` value depending on a given format.
	 * @param ?string $value The nullable `DateTime` string value which has to be converted.
	 * @return ?DateTime The converted nullable `DateTime` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws InvalidValueExceptionInterface The value to convert is invalid.
	 */
	public function convert( mixed $value ): ?DateTime;
}
