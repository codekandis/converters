<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the interface of any exception if a type is invalid.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidTypeExceptionInterface
{
	/**
	 * Static constructor.
	 * @param string $invalidType The invalid type.
	 * @param string[] $expectedTypes The expected types.
	 * @return static
	 */
	public static function with_invalidTypeAndExpectedTypes( string $invalidType, string ...$expectedTypes ): static;
}
