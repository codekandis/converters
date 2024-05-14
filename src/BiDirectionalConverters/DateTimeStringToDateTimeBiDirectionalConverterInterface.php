<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;

/**
 * Represents the interface of any bidirectional converter converting a `DateTime` string value into its corresponding `DateTime` value depending on a given format - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeStringToDateTimeBiDirectionalConverterInterface extends BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `DateTime` string value into its corresponding `DateTime` value depending on a given format.
	 * @param string $value The `DateTime` string value which has to be converted.
	 * @return DateTime The converted `DateTime` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): DateTime;

	/**
	 * Converts from a `DateTime` value depending on a given format into its corresponding `DateTime` string value.
	 * @param DateTime $value The `DateTime` value which has to be converted.
	 * @return string The converted `DateTime` string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): string;
}
