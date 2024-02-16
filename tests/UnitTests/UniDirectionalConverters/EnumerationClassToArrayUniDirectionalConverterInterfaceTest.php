<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\UniDirectionalConverters;

use CodeKandis\Converters\EnumerationClassNotFoundExceptionInterface;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\EnumerationClassToArrayUniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithNonExistentEnumerationClassClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\UniDirectionalConverters\EnumerationClassToArrayUniDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the interface of any
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */

/**
 * Represents the test case of `CodeKandis\Converters\UniDirectionalConverters\EnumerationClassToArrayUniDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumerationClassToArrayUniDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `EnumerationClassToArrayUniDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\EnumerationClassNotFoundExceptionInterface` on an invalid enumeration class name.
	 * @param EnumerationClassToArrayUniDirectionalConverterInterface $enumerationClassToArrayUniDirectionalConverter The unidirectional converter to test.
	 * @param mixed $nonExistentEnumerationClassClassName The nonexistent enumeration class class name to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithNonExistentEnumerationClassClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertThrowsInvalidValueExceptionInterfaceOnInvalidValue( EnumerationClassToArrayUniDirectionalConverterInterface $enumerationClassToArrayUniDirectionalConverter, mixed $nonExistentEnumerationClassClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$enumerationClassToArrayUniDirectionalConverter->convert( $nonExistentEnumerationClassClassName );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( EnumerationClassNotFoundExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}
}
