<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the interface of any exception if a class does not exist.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ClassNotFoundExceptionInterface
{
	/**
	 * Static constructor.
	 * @param string $className The class name of the class.
	 */
	public static function with_className( string $className ): static;
}
