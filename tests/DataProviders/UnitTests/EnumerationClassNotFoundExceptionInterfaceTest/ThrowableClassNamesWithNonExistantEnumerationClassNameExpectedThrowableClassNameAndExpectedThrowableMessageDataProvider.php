<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\EnumerationClassNotFoundExceptionInterfaceTest;

use CodeKandis\Converters\EnumerationClassNotFoundException;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistant enumeration class name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistantEnumerationClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'              => $throwableClassName = EnumerationClassNotFoundException::class,
				'nonExistantEnumerationClassName' => $nonExistantEnumerationClassName = 'foobar',
				'expectedThrowableClassName'      => $throwableClassName,
				'expectedThrowableMessage'        => sprintf( EnumerationClassNotFoundException::EXCEPTION_MESSAGE_ENUMERATION_CLASS_NOT_FOUND, $nonExistantEnumerationClassName )
			]
		];
	}
}
