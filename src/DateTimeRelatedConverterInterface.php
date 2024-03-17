<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use DateTimeZone;

/**
 * Represents the interface of any `DateTime` related converter.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface DateTimeRelatedConverterInterface extends ConverterInterface
{
	/**
	 * Gets the format of the timestamp string.
	 * @return string The format of the timestamp string.
	 */
	public function getFormat(): string;

	/**
	 * Gets the time zone of the timestamp.
	 * @return ?DateTimeZone The timezone of the timestamp.
	 */
	public function getTimeZone(): ?DateTimeZone;
}
