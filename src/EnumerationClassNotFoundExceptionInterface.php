<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the interface of any exception if an enumeration class does not exist.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EnumerationClassNotFoundExceptionInterface
{
	/**
	 * Static constructor.
	 * @param string $enumerationClassClassName The class name of the enumeration class.
	 * @return static
	 */
	public static function with_enumerationClassClassName( string $enumerationClassClassName ): static;
}
