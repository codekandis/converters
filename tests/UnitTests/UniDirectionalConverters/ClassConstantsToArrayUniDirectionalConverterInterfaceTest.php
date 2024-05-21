<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\UniDirectionalConverters;

use CodeKandis\Converters\ClassNotFoundExceptionInterface;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the interface of any
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */

/**
 * Represents the test case of `CodeKandis\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassConstantsToArrayUniDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `ClassConstantsToArrayUniDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\ClassNotFoundExceptionInterface` on an invalid class name.
	 * @param ClassConstantsToArrayUniDirectionalConverterInterface $uniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $nonExistentClassName The nonexistent class name to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertThrowsInvalidValueExceptionInterfaceOnInvalidValue( ClassConstantsToArrayUniDirectionalConverterInterface $uniDirectionalConverter, mixed $nonExistentClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$uniDirectionalConverter->convert( $nonExistentClassName );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( ClassNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}
}
