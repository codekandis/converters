<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests;

use CodeKandis\Converters\ClassNotFoundExceptionInterface;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\ClassNotFoundExceptionInterfaceTest\ThrowableClassNamesWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Converters\ClassNotFoundExceptionInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassNotFoundExceptionInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `ClassNotFoundExceptionInterface::with_className()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentClassName The nonexistent class name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeAndExpectedTypesInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		$resultedThrowable          = $throwableClassName::{'with_className'}( $nonExistentClassName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ClassNotFoundExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
