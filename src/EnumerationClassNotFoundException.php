<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use Override;
use ReflectionException;
use function sprintf;

/**
 * Represents an exception if an enumeration class does not exist.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumerationClassNotFoundException extends ReflectionException implements EnumerationClassNotFoundExceptionInterface
{
	/**
	 * Represents the exception message if an enumeration class does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_ENUMERATION_CLASS_NOT_FOUND = 'The enumeration class `%s` does not exist.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_enumerationClassClassName( string $enumerationClassClassName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_ENUMERATION_CLASS_NOT_FOUND, $enumerationClassClassName )
		);
	}
}
