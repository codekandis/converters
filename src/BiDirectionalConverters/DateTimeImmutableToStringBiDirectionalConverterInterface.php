<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTimeImmutable;

/**
 * Represents the interface of any bidirectional converter converting between `DateTimeImmutable` and `string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeImmutableToStringBiDirectionalConverterInterface extends BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `DateTimeImmutable` into a `string` value.
	 * @param DateTimeImmutable $value The `DateTimeImmutable` value which has to be converted.
	 * @return string The converted `string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): string;

	/**
	 * Converts from a `string` into a `DateTimeImmutable` value.
	 * @param string $value The `string` value which has to be converted.
	 * @return DateTimeImmutable The converted `DateTimeImmutable` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): DateTimeImmutable;
}
