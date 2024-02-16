<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\AbstractDateTimeRelatedConverterTest\DateTimeRelatedConverterClassNamesWithFormatAndTimeZoneDataProvider;
use CodeKandis\PhpUnit\TestCase;
use DateTimeZone;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Converters\AbstractDateTimeRelatedConverter`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractDateTimeRelatedConverterTest extends TestCase
{
	/**
	 * Tests if the method `AbstractDateTimeRelatedConverter::__construct()` instantiates the converter correctly.
	 * @param string $dateTimeRelatedConverterClassName The class name of the `DateTime` related converter to test.
	 * @param string $format The format of the timestamp string to pass.
	 * @param ?DateTimeZone $timeZone The time zone timestamp string to pass.
	 */
	#[DataProviderExternal( DateTimeRelatedConverterClassNamesWithFormatAndTimeZoneDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesConverterCorrectly( string $dateTimeRelatedConverterClassName, string $format, ?DateTimeZone $timeZone ): void
	{
		$resultedDateTimeRelatedConverter = new $dateTimeRelatedConverterClassName( $format, $timeZone );

		static::assertInstanceOf( AbstractDateTimeRelatedConverter::class, $resultedDateTimeRelatedConverter );
	}
}
