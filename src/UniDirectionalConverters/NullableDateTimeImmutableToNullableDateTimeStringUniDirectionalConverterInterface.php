<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTimeImmutable;

/**
 * Represents the interface of any unidirectional converter converting a `nullable DateTimeImmutable` into a `nullable DateTime string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `nullable DateTimeImmutable` into a `nullable DateTime string` value.
	 * @param ?DateTimeImmutable $value The `nullable DateTimeImmutable` value which has to be converted.
	 * @return ?string The converted `nullable DateTime string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
