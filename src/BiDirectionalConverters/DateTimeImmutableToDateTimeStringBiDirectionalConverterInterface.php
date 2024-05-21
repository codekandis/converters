<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTimeImmutable;

/**
 * Represents the interface of any bidirectional converter converting a `DateTimeImmutable` value into its corresponding `DateTime` string value depending on a given format - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeImmutableToDateTimeStringBiDirectionalConverterInterface extends BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `DateTimeImmutable` value into its corresponding `DateTime` string value depending on a given format.
	 * @param DateTimeImmutable $value The `DateTimeImmutable` value which has to be converted.
	 * @return string The converted `DateTime` string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): string;

	/**
	 * Converts from a `DateTime` string value into its corresponding `DateTimeImmutable` value depending on a given format.
	 * @param string $value The `DateTime` string value which has to be converted.
	 * @return DateTimeImmutable The converted `DateTimeImmutable` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): DateTimeImmutable;
}
