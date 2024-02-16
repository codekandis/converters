<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\UnitTests\BiDirectionalConverters;

use CodeKandis\Converters\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverter;
use CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverterTest\BiDirectionalConverterClassNamesWithFormatAndTimeZoneDataProvider;
use CodeKandis\PhpUnit\TestCase;
use DateTimeZone;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Converters\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverter`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractDateTimeRelatedBiDirectionalConverterTest extends TestCase
{
	/**
	 * Tests if the method `AbstractDateTimeRelatedBiDirectionalConverter::__construct()` instantiates the converter correctly.
	 * @param string $biDirectionalConverterClassName The class name of the bidirectional converter to test.
	 * @param string $format The format of the timestamp string to pass.
	 * @param ?DateTimeZone $timeZone The time zone timestamp string to pass.
	 */
	#[DataProviderExternal( BiDirectionalConverterClassNamesWithFormatAndTimeZoneDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesConverterCorrectly( string $biDirectionalConverterClassName, string $format, ?DateTimeZone $timeZone ): void
	{
		$resultedDateTimeRelatedBiDirectionalConverter = new $biDirectionalConverterClassName( $format, $timeZone );

		static::assertInstanceOf( AbstractDateTimeRelatedBiDirectionalConverter::class, $resultedDateTimeRelatedBiDirectionalConverter );
	}
}
