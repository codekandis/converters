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
 * Represents a data provider providing bidirectional converters with valid from value and expected converted from value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithValidFromValueAndExpectedConvertedFromValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_ARRAY,
				'expectedConvertedFromValue' => Values::BINARY_STRING
			],
			1  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER,
				'expectedConvertedFromValue' => Values::BINARY_STRING
			],
			2  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::BINARY_STRING,
				'expectedConvertedFromValue' => Values::BOOLEAN_ARRAY
			],
			3  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			4  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			5  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			6  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			7  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			8  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			9  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			10 => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			11 => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			12 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			13 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			14 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			15 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT_STRING,
				'expectedConvertedFromValue' => Values::FLOAT
			],
			16 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			17 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			18 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::BINARY_STRING,
				'expectedConvertedFromValue' => Values::INTEGER
			],
			19 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_FALSE
			],
			20 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_TRUE
			],
			21 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER_STRING,
				'expectedConvertedFromValue' => Values::INTEGER
			],
			22 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			23 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			24 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			25 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			26 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			27 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			28 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			29 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			30 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			31 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			32 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			33 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			34 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			35 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			36 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			37 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			38 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			39 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			40 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			41 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT_STRING,
				'expectedConvertedFromValue' => Values::FLOAT
			],
			42 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			43 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			44 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			45 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			46 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER_STRING,
				'expectedConvertedFromValue' => Values::INTEGER
			],
			47 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			48 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_FALSE
			],
			49 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_TRUE
			],
			50 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			51 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			52 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			53 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			54 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			55 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			56 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			57 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			58 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			59 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			60 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			61 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			62 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			63 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT,
				'expectedConvertedFromValue' => Values::FLOAT_STRING
			],
			64 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			65 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER,
				'expectedConvertedFromValue' => Values::INTEGER_STRING
			],
			66 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_FALSE
			],
			67 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_TRUE
			],
			68 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			69 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			70 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			71 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			72 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			73 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			74 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT,
				'expectedConvertedFromValue' => Values::FLOAT_STRING
			],
			75 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER,
				'expectedConvertedFromValue' => Values::INTEGER_STRING
			]
		];
	}
}
