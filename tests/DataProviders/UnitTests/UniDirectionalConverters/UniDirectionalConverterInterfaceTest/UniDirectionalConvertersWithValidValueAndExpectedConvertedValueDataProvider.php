<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanArrayToBinaryStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanIntegerStringToBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanIntegerToBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanStringToBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanToBooleanIntegerStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanToBooleanIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanToBooleanStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\ClassConstantsToArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\FloatStringToFloatUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\FloatToFloatStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntegerStringToIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntegerToBinaryStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\IntegerToIntegerStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableFloatToNullableFloatStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableIntegerStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableIntegerToNullableIntegerStringUniDirectionalConverter;
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
				'uniDirectionalConverter' => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::BOOLEAN_ARRAY
			],
			1  => [
				'uniDirectionalConverter' => new BinaryStringToIntegerUniDirectionalConverter(),
				'validValue'              => Values::BINARY_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			2  => [
				'uniDirectionalConverter' => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_ARRAY,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			3  => [
				'uniDirectionalConverter' => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			4  => [
				'uniDirectionalConverter' => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			5  => [
				'uniDirectionalConverter' => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			6  => [
				'uniDirectionalConverter' => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			7  => [
				'uniDirectionalConverter' => new BooleanStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			8  => [
				'uniDirectionalConverter' => new BooleanStringToBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			9  => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			10 => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			11 => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_FALSE
			],
			12 => [
				'uniDirectionalConverter' => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_TRUE
			],
			13 => [
				'uniDirectionalConverter' => new BooleanToBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_FALSE
			],
			14 => [
				'uniDirectionalConverter' => new BooleanToBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_TRUE
			],
			15 => [
				'uniDirectionalConverter' => new ClassConstantsToArrayUniDirectionalConverter(),
				'validValue'              => Values::createClassObject()::class,
				'expectedConvertedValue'  => Values::CLASS_CONSTANTS_ARRAY
			],
			16 => [
				'uniDirectionalConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			17 => [
				'uniDirectionalConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			18 => [
				'uniDirectionalConverter' => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			19 => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			20 => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			21 => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			22 => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			23 => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			24 => [
				'uniDirectionalConverter' => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			25 => [
				'uniDirectionalConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			26 => [
				'uniDirectionalConverter' => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			27 => [
				'uniDirectionalConverter' => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			28 => [
				'uniDirectionalConverter' => new FloatStringToFloatUniDirectionalConverter(),
				'validValue'              => Values::FLOAT_STRING,
				'expectedConvertedValue'  => Values::FLOAT
			],
			29 => [
				'uniDirectionalConverter' => new FloatToFloatStringUniDirectionalConverter(),
				'validValue'              => Values::FLOAT,
				'expectedConvertedValue'  => Values::FLOAT_STRING
			],
			30 => [
				'uniDirectionalConverter' => new IntegerStringToIntegerUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			31 => [
				'uniDirectionalConverter' => new IntegerToBinaryStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::BINARY_STRING
			],
			32 => [
				'uniDirectionalConverter' => new IntegerToIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::INTEGER_STRING
			],
			33 => [
				'uniDirectionalConverter' => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			34 => [
				'uniDirectionalConverter' => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			35 => [
				'uniDirectionalConverter' => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			36 => [
				'uniDirectionalConverter' => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			37 => [
				'uniDirectionalConverter' => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_FALSE
			],
			38 => [
				'uniDirectionalConverter' => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_TRUE
			],
			39 => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			40 => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			41 => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			42 => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			43 => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_FALSE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_FALSE
			],
			44 => [
				'uniDirectionalConverter' => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'validValue'              => Values::BOOLEAN_TRUE,
				'expectedConvertedValue'  => Values::BOOLEAN_STRING_TRUE
			],
			45 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			46 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			47 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			48 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			49 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			50 => [
				'uniDirectionalConverter' => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeImmutableObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			51 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			52 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			53 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			54 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			55 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			56 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeImmutableObject()
			],
			57 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			58 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			59 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			60 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			61 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			62 => [
				'uniDirectionalConverter' => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::DATETIME_STRING,
				'expectedConvertedValue'  => Values::createDateTimeObject()
			],
			63 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			64 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			65 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			66 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			67 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			68 => [
				'uniDirectionalConverter' => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validValue'              => Values::createDateTimeObject(),
				'expectedConvertedValue'  => Values::DATETIME_STRING
			],
			69 => [
				'uniDirectionalConverter' => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			70 => [
				'uniDirectionalConverter' => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'validValue'              => Values::FLOAT_STRING,
				'expectedConvertedValue'  => Values::FLOAT
			],
			71 => [
				'uniDirectionalConverter' => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			72 => [
				'uniDirectionalConverter' => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'validValue'              => Values::FLOAT,
				'expectedConvertedValue'  => Values::FLOAT_STRING
			],
			73 => [
				'uniDirectionalConverter' => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			74 => [
				'uniDirectionalConverter' => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'validValue'              => Values::INTEGER_STRING,
				'expectedConvertedValue'  => Values::INTEGER
			],
			75 => [
				'uniDirectionalConverter' => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::NULL,
				'expectedConvertedValue'  => Values::NULL
			],
			76 => [
				'uniDirectionalConverter' => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'validValue'              => Values::INTEGER,
				'expectedConvertedValue'  => Values::INTEGER_STRING
			]
		];
	}
}
