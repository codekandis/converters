<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\UniDirectionalConverters;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterfaceTest\UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidValueExceptionInterface` on an invalid value.
	 * @param NullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface $uniDirectionalConverters The unidirectional converter to test.
	 * @param mixed $invalidValue The invalid value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertThrowsInvalidValueExceptionInterfaceOnInvalidValue( nullableDateTimeStringToNullableDateTimeUniDirectionalConverterInterface $uniDirectionalConverter, mixed $invalidValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$uniDirectionalConverter->convert( $invalidValue );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidValueExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}
}
