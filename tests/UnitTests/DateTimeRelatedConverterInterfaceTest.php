<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests;

use CodeKandis\Converters\DateTimeRelatedConverterInterface;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\DateTimeRelatedConverterInterfaceTest\DateTimeRelatedConvertersWithExpectedFormatDataProvider;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\DateTimeRelatedConverterInterfaceTest\DateTimeRelatedConvertersWithExpectedTimeZoneDataProvider;
use CodeKandis\PhpUnit\TestCase;
use DateTimeZone;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Converters\EnumerationClassNotFoundExceptionInterface`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `DateTimeRelatedConverterInterface::getFormat()` returns the format of the timestamp string correctly.
	 * @param DateTimeRelatedConverterInterface $dateTimeRelatedConverter The `DateTime` related converter to test.
	 * @param string $expectedFormat The expected format of the timestamp string.
	 */
	#[DataProviderExternal( DateTimeRelatedConvertersWithExpectedFormatDataProvider::class, 'provideData' )]
	public function testIfMethodGetFormatReturnsTimestampStringFormatCorrectly( DateTimeRelatedConverterInterface $dateTimeRelatedConverter, string $expectedFormat ): void
	{
		$resultedFormat = $dateTimeRelatedConverter->getFormat();

		static::assertSame( $expectedFormat, $resultedFormat );
	}

	/**
	 * Tests if the method `DateTimeRelatedConverterInterface::getFormat()` returns the format of the timestamp string correctly.
	 * @param DateTimeRelatedConverterInterface $dateTimeRelatedConverter The `DateTime` related converter to test.
	 * @param ?DateTimeZone $expectedTimeZone The expected time zone timestamp string.
	 */
	#[DataProviderExternal( DateTimeRelatedConvertersWithExpectedTimeZoneDataProvider::class, 'provideData' )]
	public function testIfMethodGetTimeZoneReturnsTimestampStringFormatCorrectly( DateTimeRelatedConverterInterface $dateTimeRelatedConverter, ?DateTimeZone $expectedTimeZone ): void
	{
		$resultedTimeZone = $dateTimeRelatedConverter->getTimeZone();

		static::assertSame( $expectedTimeZone, $resultedTimeZone );
	}
}
