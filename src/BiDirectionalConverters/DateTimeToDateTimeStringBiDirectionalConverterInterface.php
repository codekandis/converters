<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;

/**
 * Represents the interface of any bidirectional converter converting between `DateTime` and `DateTime string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeToDateTimeStringBiDirectionalConverterInterface extends BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a `DateTime` into a `DateTime string` value.
	 * @param DateTime $value The `DateTime` value which has to be converted.
	 * @return string The converted `DateTime string` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): string;

	/**
	 * Converts from a `DateTime string` into a `DateTime` value.
	 * @param string $value The `DateTime string` value which has to be converted.
	 * @return DateTime The converted `DateTime` value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): DateTime;
}
