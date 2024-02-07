<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the interface of any type determinator.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypeDeterminatorInterface
{
	/**
	 * Determines the type of a value.
	 * @param mixed $value The value to determine its type.
	 * @return string The determined type.
	 */
	public function determine( mixed $value ): string;
}
