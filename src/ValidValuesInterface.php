<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the interface of any enumeration of valid values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ValidValuesInterface
{
	/**
	 * Creates a `DateTime string` by a specific format.
	 * @param string $format The format to create the `DateTime string` from.
	 * @return string The created `DateTime string` from.
	 */
	public static function createDateTimeString( string $format ): string;
}
