<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBoolArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToIntUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BoolArrayToBinaryStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BoolToIntStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BoolToIntUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BoolToStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeImmutableToStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeToStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\EnumerationClassToArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\FloatToStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntStringToBoolUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntToBinaryStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntToBoolUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntToStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBoolToNullableIntStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBoolToNullableStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeToNullableStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableFloatToNullableStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableIntStringToNullableBoolUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableIntToNullableStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableStringToNullableBoolUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableStringToNullableDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableStringToNullableFloatUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableStringToNullableIntUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\StringToBoolUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\StringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\StringToDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\StringToFloatUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\StringToIntUniDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing unidirectional converters with valid value and expected converted value.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithValidValueAndExpectedConvertedValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'uniDirectionalConverter' => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::BOOLEAN_ARRAY
			],
			1  => [
				'uniDirectionalConverter' => new BinaryStringToIntUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			2  => [
				'uniDirectionalConverter' => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_ARRAY,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			3  => [
				'uniDirectionalConverter' => new BoolToIntStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			4  => [
				'uniDirectionalConverter' => new BoolToIntStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			5  => [
				'uniDirectionalConverter' => new BoolToIntUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_FALSE
			],
			6  => [
				'uniDirectionalConverter' => new BoolToIntUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_TRUE
			],
			7  => [
				'uniDirectionalConverter' => new BoolToStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_FALSE
			],
			8  => [
				'uniDirectionalConverter' => new BoolToStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_TRUE
			],
			9  => [
				'uniDirectionalConverter' => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			10 => [
				'uniDirectionalConverter' => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			11 => [
				'uniDirectionalConverter' => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			12 => [
				'uniDirectionalConverter' => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			13 => [
				'uniDirectionalConverter' => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			14 => [
				'uniDirectionalConverter' => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			15 => [
				'uniDirectionalConverter' => new EnumerationClassToArrayUniDirectionalConverter(),
				'validValue'              => Values
					::createEnumerationClassObject()
					::class,
				'expectedConvertedValue'  => Values::ENUMERATION_ARRAY
			],
			16 => [
				'uniDirectionalConverter' => new FloatToStringUniDirectionalConverter(),
				'validValue'              => Values::FLOAT,
				'expectedConvertedValue'  => Values::FLOAT_STRING
			],
			17 => [
				'uniDirectionalConverter' => new IntStringToBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			18 => [
				'uniDirectionalConverter' => new IntStringToBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			19 => [
				'uniDirectionalConverter' => new IntToBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			20 => [
				'uniDirectionalConverter' => new IntToBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			21 => [
				'uniDirectionalConverter' => new IntToBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			22 => [
				'uniDirectionalConverter' => new IntToStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::INTEGER_STRING
			],
			23 => [
				'uniDirectionalConverter' => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			24 => [
				'uniDirectionalConverter' => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			25 => [
				'uniDirectionalConverter' => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			26 => [
				'uniDirectionalConverter' => new NullableBoolToNullableStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			27 => [
				'uniDirectionalConverter' => new NullableBoolToNullableStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_FALSE
			],
			28 => [
				'uniDirectionalConverter' => new NullableBoolToNullableStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_TRUE
			],
			29 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			30 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, null ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			31 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			32 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			33 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, null ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			34 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			35 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			36 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, null ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			37 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			38 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			39 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, null ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			40 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			41 => [
				'uniDirectionalConverter' => new NullableFloatToNullableStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			42 => [
				'uniDirectionalConverter' => new NullableFloatToNullableStringUniDirectionalConverter(),
				'validValue'              => Values::FLOAT,
				'expectedConvertedValue'  => Values::FLOAT_STRING
			],
			43 => [
				'uniDirectionalConverter' => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			44 => [
				'uniDirectionalConverter' => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			45 => [
				'uniDirectionalConverter' => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			46 => [
				'uniDirectionalConverter' => new NullableIntToNullableStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			47 => [
				'uniDirectionalConverter' => new NullableIntToNullableStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::INTEGER_STRING
			],
			48 => [
				'uniDirectionalConverter' => new NullableStringToNullableBoolUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			49 => [
				'uniDirectionalConverter' => new NullableStringToNullableBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			50 => [
				'uniDirectionalConverter' => new NullableStringToNullableBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			51 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			52 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			53 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			54 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			55 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			56 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			57 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			58 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			59 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			60 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			61 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			62 => [
				'uniDirectionalConverter' => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			63 => [
				'uniDirectionalConverter' => new NullableStringToNullableFloatUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			64 => [
				'uniDirectionalConverter' => new NullableStringToNullableFloatUniDirectionalConverter(),
				'validValue'              => Values::FLOAT_STRING,
				'expectedConvertedValue'  => Values::FLOAT
			],
			65 => [
				'uniDirectionalConverter' => new NullableStringToNullableIntUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			66 => [
				'uniDirectionalConverter' => new NullableStringToNullableIntUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			67 => [
				'uniDirectionalConverter' => new StringToBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			68 => [
				'uniDirectionalConverter' => new StringToBoolUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			69 => [
				'uniDirectionalConverter' => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			70 => [
				'uniDirectionalConverter' => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			71 => [
				'uniDirectionalConverter' => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			72 => [
				'uniDirectionalConverter' => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			73 => [
				'uniDirectionalConverter' => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			74 => [
				'uniDirectionalConverter' => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			75 => [
				'uniDirectionalConverter' => new StringToFloatUniDirectionalConverter(),
				'validValue'              => Values::FLOAT_STRING,
				'expectedConvertedValue'  => Values::FLOAT
			],
			76 => [
				'uniDirectionalConverter' => new StringToIntUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			]
		];
	}
}
