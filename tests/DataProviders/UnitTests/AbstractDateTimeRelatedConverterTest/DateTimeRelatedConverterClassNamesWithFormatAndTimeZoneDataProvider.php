<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\AbstractDateTimeRelatedConverterTest;

use CodeKandis\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing `DateTime` related converter class names with format and time zone.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConverterClassNamesWithFormatAndTimeZoneDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			1  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			2  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			3  => [
				'dateTimeRelatedConverterClassName' => DateTimeImmutableToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			4  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			5  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			6  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			7  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			8  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			9  => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeImmutableUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			10 => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			11 => [
				'dateTimeRelatedConverterClassName' => DateTimeStringToDateTimeUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			12 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			13 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringBiDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			],
			14 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::NULL
			],
			15 => [
				'dateTimeRelatedConverterClassName' => DateTimeToDateTimeStringUniDirectionalConverter::class,
				'format'                            => Values::DATETIME_FORMAT,
				'timeZone'                          => Values::createDateTimeZoneObject()
			]
		];
	}
}
