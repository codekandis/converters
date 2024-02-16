<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\DateTimeRelatedConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverter;
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
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			1  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			2  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			3  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			4  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			5  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			6  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			7  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			8  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			9  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			10 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			11 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			12 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			13 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			14 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			15 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			16 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			17 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			18 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			19 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			20 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			21 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			22 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			23 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			24 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			25 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			26 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			27 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			28 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			29 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			30 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			31 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			32 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			33 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			34 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			35 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			36 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			37 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			38 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			39 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			40 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			41 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			42 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			43 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			44 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			],
			45 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'expectedTimeZone'         => Values::NULL
			],
			46 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, $timeZone = Values::NULL ),
				'expectedTimeZone'         => $timeZone
			],
			47 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT, $timeZone =
					Values::createDateTimeZoneObject()
				),
				'expectedTimeZone'         => $timeZone
			]
		];
	}
}
