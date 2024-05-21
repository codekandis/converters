<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTimeImmutable;

/**
 * Represents the interface of any unidirectional converter converting a nullable `DateTime` string value into its corresponding nullable `DateTimeImmutable` value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a nullable `DateTime` string value into its corresponding nullable `DateTimeImmutable` value depending on a given format.
	 * @param ?string $value The nullable `DateTime` string value which has to be converted.
	 * @return ?DateTimeImmutable The converted nullable `DateTimeImmutable` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?DateTimeImmutable;
}
