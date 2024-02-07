<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the base class of any converter.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractConverter
{
	/**
	 * Gets the `InvalidTypeException`.
	 * @param mixed $invalidValue The given invalid value.
	 * @param string[] $expectedTypes The expected types.
	 * @return InvalidTypeExceptionInterface The `InvalidTypeException`.
	 */
	protected function getInvalidTypeException( mixed $invalidValue, string ...$expectedTypes ): InvalidTypeExceptionInterface
	{
		$invalidType = ( new TypeDeterminator( false ) )
			->determine( $invalidValue );

		return InvalidTypeException::with_invalidTypeAndExpectedTypes( $invalidType, ...$expectedTypes );
	}

	/**
	 * Gets the `InvalidValueException`.
	 * @param mixed $invalidValue The given invalid value.
	 * @param string[] $expectedValues The expected values.
	 * @return InvalidValueExceptionInterface The `InvalidValueException`.
	 */
	protected function getInvalidValueException( mixed $invalidValue, string ...$expectedValues ): InvalidValueExceptionInterface
	{
		return InvalidValueException::with_invalidValueAndExpectedValues( $invalidValue, ...$expectedValues );
	}
}
