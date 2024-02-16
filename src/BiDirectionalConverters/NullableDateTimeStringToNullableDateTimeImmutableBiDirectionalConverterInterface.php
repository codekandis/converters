<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTimeImmutable;

/**
 * Represents the interface of any bidirectional converter converting between `nullable DateTime string` and `nullable DateTimeImmutable`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverterInterface extends BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `nullable DateTime string` into a `nullable DateTimeImmutable` value.
	 * @param ?string $value The `nullable DateTime string` value which has to be converted.
	 * @return ?DateTimeImmutable The converted `nullable DateTimeImmutable` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): ?DateTimeImmutable;

	/**
	 * Converts from a `nullable DateTimeImmutable` into a `nullable DateTime string` value.
	 * @param ?DateTimeImmutable $value The `nullable DateTimeImmutable` value which has to be converted.
	 * @return ?string The converted `nullable DateTime string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): ?string;
}
