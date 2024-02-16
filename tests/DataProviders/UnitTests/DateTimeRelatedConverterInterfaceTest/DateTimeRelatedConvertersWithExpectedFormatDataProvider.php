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
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			1  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			2  => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			3  => [
				'dateTimeRelatedConverter' => new DateTimeToStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			4  => [
				'dateTimeRelatedConverter' => new DateTimeToStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			5  => [
				'dateTimeRelatedConverter' => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			6  => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			7  => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			8  => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			9  => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			10 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			11 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			12 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			13 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			14 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			15 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			16 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			17 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			18 => [
				'dateTimeRelatedConverter' => new StringToDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			19 => [
				'dateTimeRelatedConverter' => new StringToDateTimeBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			20 => [
				'dateTimeRelatedConverter' => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			21 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			22 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			23 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			24 => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			25 => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			26 => [
				'dateTimeRelatedConverter' => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			27 => [
				'dateTimeRelatedConverter' => new DateTimeToStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			28 => [
				'dateTimeRelatedConverter' => new DateTimeToStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			29 => [
				'dateTimeRelatedConverter' => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			30 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			31 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			32 => [
				'dateTimeRelatedConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			33 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			34 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			35 => [
				'dateTimeRelatedConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			36 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			37 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			38 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			39 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			40 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			41 => [
				'dateTimeRelatedConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			42 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			43 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			44 => [
				'dateTimeRelatedConverter' => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
			45 => [
				'dateTimeRelatedConverter' => new StringToDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'expectedFormat'           => $format
			],
			46 => [
				'dateTimeRelatedConverter' => new StringToDateTimeUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'expectedFormat'           => $format
			],
			47 => [
				'dateTimeRelatedConverter' => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'expectedFormat'           => $format
			],
		];
	}
}
