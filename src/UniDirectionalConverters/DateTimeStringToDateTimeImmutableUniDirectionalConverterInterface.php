<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTimeImmutable;

/**
 * Represents the interface of any unidirectional converter converting a `DateTime string` into a `DateTimeImmutable`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeStringToDateTimeImmutableUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `DateTime string` into a `DateTimeImmutable` value.
	 * @param string $value The `DateTime string` value which has to be converted.
	 * @return DateTimeImmutable The converted `DateTimeImmutable` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): DateTimeImmutable;
}
