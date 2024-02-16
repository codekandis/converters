<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\BiDirectionalConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\BinaryStringToBoolArrayBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BinaryStringToIntBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BoolArrayToBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BoolToIntBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BoolToIntStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BoolToStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeImmutableToStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeToStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\FloatToStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntStringToBoolBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntToBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntToBoolBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntToStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBoolToNullableIntStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBoolToNullableStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeToNullableStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableFloatToNullableStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntStringToNullableBoolBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntToNullableStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableStringToNullableBoolBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableStringToNullableFloatBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableStringToNullableIntBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\StringToBoolBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\StringToDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\StringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\StringToFloatBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\StringToIntBiDirectionalConverter;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing bidirectional converters with valid to value and expected converted to value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithValidToValueAndExpectedConvertedToValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverter'   => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'validToValue'             => Values::BINARY_STRING,
				'expectedConvertedToValue' => Values::BOOLEAN_ARRAY
			],
			1  => [
				'biDirectionalConverter'   => new BinaryStringToIntBiDirectionalConverter(),
				'validToValue'             => Values::BINARY_STRING,
				'expectedConvertedToValue' => Values::INTEGER
			],
			2  => [
				'biDirectionalConverter'   => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_ARRAY,
				'expectedConvertedToValue' => Values::BINARY_STRING
			],
			3  => [
				'biDirectionalConverter'   => new BoolToIntBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_FALSE
			],
			4  => [
				'biDirectionalConverter'   => new BoolToIntBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_TRUE
			],
			5  => [
				'biDirectionalConverter'   => new BoolToIntStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			6  => [
				'biDirectionalConverter'   => new BoolToIntStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			7  => [
				'biDirectionalConverter'   => new BoolToStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_FALSE
			],
			8  => [
				'biDirectionalConverter'   => new BoolToStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_TRUE
			],
			9  => [
				'biDirectionalConverter'   => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			10 => [
				'biDirectionalConverter'   => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			11 => [
				'biDirectionalConverter'   => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			12 => [
				'biDirectionalConverter'   => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			13 => [
				'biDirectionalConverter'   => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			14 => [
				'biDirectionalConverter'   => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			15 => [
				'biDirectionalConverter'   => new FloatToStringBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT,
				'expectedConvertedToValue' => Values::FLOAT_STRING
			],
			16 => [
				'biDirectionalConverter'   => new IntStringToBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			17 => [
				'biDirectionalConverter'   => new IntStringToBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			18 => [
				'biDirectionalConverter'   => new IntToBinaryStringBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER,
				'expectedConvertedToValue' => Values::BINARY_STRING
			],
			19 => [
				'biDirectionalConverter'   => new IntToBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			20 => [
				'biDirectionalConverter'   => new IntToBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			21 => [
				'biDirectionalConverter'   => new IntToStringBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER,
				'expectedConvertedToValue' => Values::INTEGER_STRING
			],
			22 => [
				'biDirectionalConverter'   => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			23 => [
				'biDirectionalConverter'   => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			24 => [
				'biDirectionalConverter'   => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			25 => [
				'biDirectionalConverter'   => new NullableBoolToNullableStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			26 => [
				'biDirectionalConverter'   => new NullableBoolToNullableStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_FALSE
			],
			27 => [
				'biDirectionalConverter'   => new NullableBoolToNullableStringBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_STRING_TRUE
			],
			28 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			29 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			30 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			31 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			32 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			33 => [
				'biDirectionalConverter'   => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			34 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			35 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			36 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			37 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			38 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			39 => [
				'biDirectionalConverter'   => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::createDateTimeObject(),
				'expectedConvertedToValue' => Values::DATETIME_STRING
			],
			40 => [
				'biDirectionalConverter'   => new NullableFloatToNullableStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			41 => [
				'biDirectionalConverter'   => new NullableFloatToNullableStringBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT,
				'expectedConvertedToValue' => Values::FLOAT_STRING
			],
			42 => [
				'biDirectionalConverter'   => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			43 => [
				'biDirectionalConverter'   => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			44 => [
				'biDirectionalConverter'   => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			45 => [
				'biDirectionalConverter'   => new NullableIntToNullableStringBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			46 => [
				'biDirectionalConverter'   => new NullableIntToNullableStringBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER,
				'expectedConvertedToValue' => Values::INTEGER_STRING
			],
			47 => [
				'biDirectionalConverter'   => new NullableStringToNullableBoolBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			48 => [
				'biDirectionalConverter'   => new NullableStringToNullableBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			49 => [
				'biDirectionalConverter'   => new NullableStringToNullableBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			50 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			51 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			52 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			53 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			54 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			55 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			56 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			57 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			58 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			59 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			60 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			61 => [
				'biDirectionalConverter'   => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			62 => [
				'biDirectionalConverter'   => new NullableStringToNullableFloatBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			63 => [
				'biDirectionalConverter'   => new NullableStringToNullableFloatBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT_STRING,
				'expectedConvertedToValue' => Values::FLOAT
			],
			64 => [
				'biDirectionalConverter'   => new NullableStringToNullableIntBiDirectionalConverter(),
				'validToValue'             => Values::NULL,
				'expectedConvertedToValue' => Values::NULL
			],
			65 => [
				'biDirectionalConverter'   => new NullableStringToNullableIntBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER_STRING,
				'expectedConvertedToValue' => Values::INTEGER
			],
			66 => [
				'biDirectionalConverter'   => new StringToBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedToValue' => Values::BOOLEAN_FALSE
			],
			67 => [
				'biDirectionalConverter'   => new StringToBoolBiDirectionalConverter(),
				'validToValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedToValue' => Values::BOOLEAN_TRUE
			],
			68 => [
				'biDirectionalConverter'   => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			69 => [
				'biDirectionalConverter'   => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			70 => [
				'biDirectionalConverter'   => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeObject()
			],
			71 => [
				'biDirectionalConverter'   => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			72 => [
				'biDirectionalConverter'   => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			73 => [
				'biDirectionalConverter'   => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validToValue'             => Values::DATETIME_STRING,
				'expectedConvertedToValue' => Values::createDateTimeImmutableObject()
			],
			74 => [
				'biDirectionalConverter'   => new StringToFloatBiDirectionalConverter(),
				'validToValue'             => Values::FLOAT_STRING,
				'expectedConvertedToValue' => Values::FLOAT
			],
			75 => [
				'biDirectionalConverter'   => new StringToIntBiDirectionalConverter(),
				'validToValue'             => Values::INTEGER_STRING,
				'expectedConvertedToValue' => Values::INTEGER
			]
		];
	}
}
