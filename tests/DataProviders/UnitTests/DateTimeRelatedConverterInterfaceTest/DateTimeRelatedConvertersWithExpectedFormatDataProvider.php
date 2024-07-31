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
 * Represents a data provider providing `DateTime` related converters with expected format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeRelatedConvertersWithExpectedFormatDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			1  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			2  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			3  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			4  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			5  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			6  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			7  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			8  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			9  => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			10 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			11 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			12 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			13 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			14 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			15 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			16 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			17 => [
				'dateTimeRelatedConverter' => new DateTimeStringToDateTimeUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			18 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			19 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			20 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			21 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			22 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			23 => [
				'dateTimeRelatedConverter' => new DateTimeToDateTimeStringUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			24 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			25 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			26 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			27 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			28 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			29 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			30 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			31 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			32 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			33 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			34 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			35 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			36 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			37 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			38 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			39 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			40 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			41 => [
				'dateTimeRelatedConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			42 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			43 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			44 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			45 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			46 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			47 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			]
		];
	}
}
