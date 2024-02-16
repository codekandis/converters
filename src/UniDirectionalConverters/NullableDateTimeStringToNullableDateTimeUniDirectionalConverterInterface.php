<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;

/**
 * Represents the interface of any unidirectional converter converting a `nullable DateTime string` into a `nullable DateTime`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `nullable DateTime string` into a `nullable DateTime` value.
	 * @param ?string $value The `nullable DateTime string` value which has to be converted.
	 * @return ?DateTime The converted `nullable DateTime` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?DateTime;
}
