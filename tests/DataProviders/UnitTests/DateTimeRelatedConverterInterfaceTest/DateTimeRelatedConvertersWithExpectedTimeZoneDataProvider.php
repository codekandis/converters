<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\DateTimeRelatedConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\DateTimeImmutableToStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeToStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeToNullableStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\StringToDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\StringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeImmutableToStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeToStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeToNullableStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableStringToNullableDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\StringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\StringToDateTimeUniDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing `DateTime` related converters with expected timezone.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConvertersWithExpectedTimeZoneDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			1  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			2  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			3  => [
				'dateTimeRelatedConverter' => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			4  => [
				'dateTimeRelatedConverter' => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			5  => [
				'dateTimeRelatedConverter' => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			6  => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			7  => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			8  => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			9  => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			10 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			11 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			12 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			13 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			14 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			15 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			16 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			17 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			18 => [
				'dateTimeRelatedConverter' => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			19 => [
				'dateTimeRelatedConverter' => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			20 => [
				'dateTimeRelatedConverter' => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			21 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			22 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			23 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			24 => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			25 => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			26 => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			27 => [
				'dateTimeRelatedConverter' => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			28 => [
				'dateTimeRelatedConverter' => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			29 => [
				'dateTimeRelatedConverter' => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			30 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			31 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			32 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			33 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			34 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			35 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			36 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			37 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			38 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			39 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			40 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			41 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			42 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			43 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			44 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			45 => [
				'dateTimeRelatedConverter' => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			46 => [
				'dateTimeRelatedConverter' => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			47 => [
				'dateTimeRelatedConverter' => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					$timeZone = Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			]
		];
	}
}
