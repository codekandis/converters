<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use Override;
use ReflectionException;
use function sprintf;

/**
 * Represents an exception if a class does not exist.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassNotFoundException extends ReflectionException implements ClassNotFoundExceptionInterface
{
	/**
	 * Represents the exception message if a class does not exist.
	 */
	public const string EXCEPTION_MESSAGE_CLASS_NOT_FOUND = 'The class `%s` does not exist.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_className( string $className ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_CLASS_NOT_FOUND, $className )
		);
	}
}
