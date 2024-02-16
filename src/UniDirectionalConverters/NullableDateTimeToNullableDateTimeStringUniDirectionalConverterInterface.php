<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;

/**
 * Represents the interface of any unidirectional converter converting a `nullable DateTime` into a `nullable DateTime string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NullableDateTimeToNullableDateTimeStringUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `nullable DateTime` into a `nullable DateTime string' value.
	 * @param ?DateTime $value The `nullable DateTime` value which has to be converted.
	 * @return ?string The converted `nullable DateTime string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): ?string;
}
