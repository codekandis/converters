<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\BiDirectionalConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\BinaryStringToBooleanArrayBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BinaryStringToIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanArrayToBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanIntegerStringToBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanIntegerToBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanStringToBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\BooleanToBooleanStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeImmutableToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeStringToDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\FloatStringToFloatBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\FloatToFloatStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntegerToBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\IntegerToIntegerStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBinaryStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanIntegerToNullableBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanStringToNullableBooleanBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeToNullableDateTimeStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableFloatStringToNullableFloatBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableFloatToNullableFloatStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntegerStringToNullableIntegerBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntegerToNullableBinaryStringBiDirectionalConverter;
use CodeKandis\Converters\BiDirectionalConverters\NullableIntegerToNullableIntegerStringBiDirectionalConverter;
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
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_ARRAY,
				'expectedConvertedFromValue' => Values::BINARY_STRING
			],
			1  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER,
				'expectedConvertedFromValue' => Values::BINARY_STRING
			],
			2  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::BINARY_STRING,
				'expectedConvertedFromValue' => Values::BOOLEAN_ARRAY
			],
			3  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			4  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			5  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_FALSE
			],
			6  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_TRUE
			],
			7  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_FALSE
			],
			8  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_TRUE
			],
			9  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			10 => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			11 => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			12 => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			13 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			14 => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			15 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			16 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			17 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			18 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			19 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			20 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			21 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			22 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			23 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			24 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			25 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			26 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			27 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT,
				'expectedConvertedFromValue' => Values::FLOAT_STRING
			],
			28 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT_STRING,
				'expectedConvertedFromValue' => Values::FLOAT
			],
			29 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER,
				'expectedConvertedFromValue' => Values::INTEGER_STRING
			],
			30 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::BINARY_STRING,
				'expectedConvertedFromValue' => Values::INTEGER
			],
			31 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER_STRING,
				'expectedConvertedFromValue' => Values::INTEGER
			],
			32 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			33 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_ARRAY,
				'expectedConvertedFromValue' => Values::BINARY_STRING
			],
			34 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			35 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER,
				'expectedConvertedFromValue' => Values::BINARY_STRING
			],
			36 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			37 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::BINARY_STRING,
				'expectedConvertedFromValue' => Values::BOOLEAN_ARRAY
			],
			38 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			39 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_FALSE
			],
			40 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_STRING_TRUE
			],
			41 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			42 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_FALSE
			],
			43 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_INTEGER_TRUE
			],
			44 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			45 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_FALSE
			],
			46 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_STRING_TRUE
			],
			47 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			48 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			49 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			50 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			51 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			52 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			53 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			54 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_FALSE,
				'expectedConvertedFromValue' => Values::BOOLEAN_FALSE
			],
			55 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'validFromValue'             => Values::BOOLEAN_STRING_TRUE,
				'expectedConvertedFromValue' => Values::BOOLEAN_TRUE
			],
			56 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			57 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			58 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			59 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			60 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			61 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeImmutableObject()
			],
			62 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			63 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			64 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			65 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			66 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			67 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			68 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			69 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			70 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			71 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			72 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			73 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::createDateTimeImmutableObject(),
				'expectedConvertedFromValue' => Values::DATETIME_STRING
			],
			74 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			75 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			76 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			77 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			78 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			79 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'validFromValue'             => Values::DATETIME_STRING,
				'expectedConvertedFromValue' => Values::createDateTimeObject()
			],
			80 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			81 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT,
				'expectedConvertedFromValue' => Values::FLOAT_STRING
			],
			82 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			83 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'validFromValue'             => Values::FLOAT_STRING,
				'expectedConvertedFromValue' => Values::FLOAT
			],
			84 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			85 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER,
				'expectedConvertedFromValue' => Values::INTEGER_STRING
			],
			86 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			87 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'validFromValue'             => Values::BINARY_STRING,
				'expectedConvertedFromValue' => Values::INTEGER
			],
			88 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::NULL,
				'expectedConvertedFromValue' => Values::NULL
			],
			89 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'validFromValue'             => Values::INTEGER_STRING,
				'expectedConvertedFromValue' => Values::INTEGER
			]
		];
	}
}
