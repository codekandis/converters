<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use LogicException;
use Override;
use function implode;
use function sprintf;

/**
 * Represents an exception if a value is invalid.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidValueException extends LogicException implements InvalidValueExceptionInterface
{
	/**
	 * Represents the exception message if a value to convert is not valid.
	 * @var string
	 */
	protected const string EXCEPTION_MESSAGE_INVALID_VALUE = 'The value is invalid. `%s` expected, but `%s` given.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_invalidValueAndExpectedValues( string $invalidValue, string ...$expectedValues ): static
	{
		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_INVALID_VALUE,
				implode( ', ', $expectedValues ),
				$invalidValue
			)
		);
	}
}
