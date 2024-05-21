<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;

/**
 * Represents the interface of any bidirectional converter converting a nullable `DateTime` value into its corresponding nullable `DateTime` string value depending on a given format - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface extends BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a nullable `DateTime` value into its corresponding nullable `DateTime` string value depending on a given format.
	 * @param ?DateTime $value The nullable `DateTime` value which has to be converted.
	 * @return ?string The converted nullable `DateTime` string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?string;

	/**
	 * Converts from a nullable `DateTime` string value depending on a given format into its corresponding nullable `DateTime` value.
	 * @param ?string $value The nullable `DateTime` string value which has to be converted.
	 * @return ?DateTime The converted nullable `DateTime` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?DateTime;
}
