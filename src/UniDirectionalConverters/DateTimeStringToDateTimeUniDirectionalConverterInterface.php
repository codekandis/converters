<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;

/**
 * Represents the interface of any unidirectional converter converting a `DateTime string` into a `DateTime`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeStringToDateTimeUniDirectionalConverterInterface extends UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `DateTime string` into a `DateTime` value.
	 * @param string $value The `DateTime string` value which has to be converted.
	 * @return DateTime The converted `DateTime` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convert( mixed $value ): DateTime;
}
