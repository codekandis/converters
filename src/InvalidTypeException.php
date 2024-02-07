<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use LogicException;
use Override;
use function implode;
use function sprintf;

/**
 * Represents an exception if a type is invalid.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidTypeException extends LogicException implements InvalidTypeExceptionInterface
{
	/**
	 * Represents the exception message if the type of a value to convert is not valid.
	 * @var string
	 */
	protected const string EXCEPTION_MESSAGE_INVALID_TYPE = 'The type of the value is invalid. `%s` expected, but `%s` given.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_invalidTypeAndExpectedTypes( string $invalidType, string ...$expectedTypes ): static
	{
		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_INVALID_TYPE,
				implode( ', ', $expectedTypes ),
				$invalidType
			)
		);
	}
}
