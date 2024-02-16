<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests;

use CodeKandis\Converters\EnumerationClassNotFoundExceptionInterface;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\EnumerationClassNotFoundExceptionInterfaceTest\ThrowableClassNamesWithNonExistantEnumerationClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Converters\EnumerationClassNotFoundExceptionInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumerationClassNotFoundExceptionInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `EnumerationClassNotFoundExceptionInterface::with_enumerationClassClassName()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistantEnumerationClassName The non-existant enumeration class name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistantEnumerationClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeAndExpectedTypesInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistantEnumerationClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		$resultedThrowable          = $throwableClassName::{'with_enumerationClassClassName'}( $nonExistantEnumerationClassName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( EnumerationClassNotFoundExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
