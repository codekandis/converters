<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the interface of any exception if a value is invalid.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidValueExceptionInterface
{
	/**
	 * Static constructor.
	 * @param string $invalidValue The invalid value.
	 * @param string[] $expectedValues The expected values.
	 * @return static
	 */
	public static function with_invalidValueAndExpectedValues( string $invalidValue, string ...$expectedValues ): static;
}
