<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\AbstractDateTimeRelatedBiDirectionalConverterTest;

use CodeKandis\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing bidirectional converter class names with format and time zone.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConverterClassNamesWithFormatAndTimeZoneDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			1  => [
				'biDirectionalConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			2  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			3  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			4  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			5  => [
				'biDirectionalConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			6  => [
				'biDirectionalConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			7  => [
				'biDirectionalConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			8  => [
				'biDirectionalConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			9  => [
				'biDirectionalConverterClassName' => NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			10 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			11 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			12 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			13 => [
				'biDirectionalConverterClassName' => NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			],
			14 => [
				'biDirectionalConverterClassName' => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::NULL
			],
			15 => [
				'biDirectionalConverterClassName' => NullableDateTimeToNullableDateTimeStringBiDirectionalConverter::class,
				'format'                          => Values::DATETIME_FORMAT,
				'timeZone'                        => Values::createDateTimeZoneObject()
			]
		];
	}
}
