<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverterInterfaceTest\BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverterInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverterInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeToDateTimeStringBiDirectionalConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `DateTimeToDateTimeStringBiDirectionalConverterInterface::convert()` throws a `CodeKandis\Types\InvalidValueExceptionInterface` on an invalid value.
	 * @param DateTimeToDateTimeStringBiDirectionalConverterInterface $biDirectionalConverter The bidirectional converter to test.
	 * @param mixed $invalidFromValue The invalid from value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 */
	#[DataProviderExternal( BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertFromThrowsInvalidValueExceptionInterfaceOnInvalidFromValue( dateTimeToDateTimeStringBiDirectionalConverterInterface $biDirectionalConverter, mixed $invalidFromValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$biDirectionalConverter->convertFrom( $invalidFromValue );
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
