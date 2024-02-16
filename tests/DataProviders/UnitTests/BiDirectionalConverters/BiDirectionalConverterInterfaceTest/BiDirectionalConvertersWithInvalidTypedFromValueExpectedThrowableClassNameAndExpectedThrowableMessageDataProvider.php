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
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\Tests\Fixtures\TypedValues;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\StraightTypes;
use Override;
use function sprintf;

/**
 * Represents a data provider providing bidirectional converters with invalid typed from value, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidTypedFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			1   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			2   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::BOOLEAN_ARRAY )
			],
			3   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			4   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			5   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			6   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			7   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			8   => [
				'biDirectionalConverter'     => new BinaryStringToBoolArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN_ARRAY )
			],
			9   => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			10  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			11  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			12  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			13  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			14  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			15  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			16  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			17  => [
				'biDirectionalConverter'     => new BinaryStringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::INTEGER )
			],
			18  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			19  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			20  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			21  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			22  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			23  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			24  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			25  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			26  => [
				'biDirectionalConverter'     => new BoolArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			27  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			28  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			29  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			30  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			31  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			32  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			33  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			34  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			35  => [
				'biDirectionalConverter'     => new BoolToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::INTEGER )
			],
			36  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			37  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			38  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			39  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			40  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			41  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			42  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			43  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			44  => [
				'biDirectionalConverter'     => new BoolToIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			45  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			46  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			47  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			48  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			49  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			50  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			51  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			52  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			53  => [
				'biDirectionalConverter'     => new BoolToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			54  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			55  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			56  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			57  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			58  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			59  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			60  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			61  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			62  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			63  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			64  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			65  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			66  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			67  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			68  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			69  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			70  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			71  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			72  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			73  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			74  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			75  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			76  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			77  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			78  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			79  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			80  => [
				'biDirectionalConverter'     => new DateTimeImmutableToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			81  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			82  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			83  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			84  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			85  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			86  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			87  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			88  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			89  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			90  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			91  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			92  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			93  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			94  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			95  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			96  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			97  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			98  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			99  => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			100 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			101 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			102 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			103 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			104 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			105 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			106 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			107 => [
				'biDirectionalConverter'     => new DateTimeToStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			108 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			109 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			110 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			111 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			112 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			113 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			114 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			115 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			116 => [
				'biDirectionalConverter'     => new FloatToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			117 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			118 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			119 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			120 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			121 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			122 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			123 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			124 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			125 => [
				'biDirectionalConverter'     => new IntStringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN )
			],
			126 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			127 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			128 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			129 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			130 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			131 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			132 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			133 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			134 => [
				'biDirectionalConverter'     => new IntToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			135 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			136 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			137 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			138 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			139 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			140 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			141 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			142 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			143 => [
				'biDirectionalConverter'     => new IntToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN )
			],
			144 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			145 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			146 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			147 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			148 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			149 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			150 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			151 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			152 => [
				'biDirectionalConverter'     => new IntToStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			153 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			154 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			155 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			156 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			157 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			158 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			159 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			160 => [
				'biDirectionalConverter'     => new NullableBoolToNullableIntStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			161 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			162 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			163 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			164 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			165 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			166 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			167 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			168 => [
				'biDirectionalConverter'     => new NullableBoolToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			169 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			170 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			171 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			172 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			173 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			174 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			175 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			176 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			177 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			178 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			179 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			180 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			181 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			182 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			183 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			184 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			185 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			186 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			187 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			188 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			189 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			190 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			191 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			192 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			193 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			194 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			195 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			196 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			197 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			198 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			199 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			200 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			201 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			202 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			203 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			204 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			205 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			206 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			207 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			208 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			209 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			210 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			211 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			212 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			213 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			214 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			215 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			216 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			217 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			218 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			219 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			220 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			221 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			222 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			223 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			224 => [
				'biDirectionalConverter'     => new NullableFloatToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			225 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			226 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			227 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			228 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			229 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			230 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			231 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			232 => [
				'biDirectionalConverter'     => new NullableIntStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			233 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			234 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			235 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			236 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			237 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			238 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			239 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			240 => [
				'biDirectionalConverter'     => new NullableIntToNullableStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			241 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			242 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			243 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			244 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			245 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			246 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			247 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			248 => [
				'biDirectionalConverter'     => new NullableStringToNullableBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			249 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			250 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			251 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			252 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			253 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			254 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			255 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			256 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			257 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			258 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			259 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			260 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			261 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			262 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			263 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			264 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			265 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			266 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			267 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			268 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			269 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			270 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			271 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			272 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			273 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			274 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			275 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			276 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			277 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			278 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			279 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			280 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			281 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			282 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			283 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			284 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			285 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			286 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			287 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			288 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			289 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			290 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			291 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			292 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			293 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			294 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			295 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			296 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			297 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			298 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			299 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			300 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			301 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			302 => [
				'biDirectionalConverter'     => new NullableStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			303 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			304 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			305 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_FLOAT )
			],
			306 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			307 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			308 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			309 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			310 => [
				'biDirectionalConverter'     => new NullableStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_FLOAT )
			],
			311 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			312 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			313 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			314 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			315 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			316 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			317 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			318 => [
				'biDirectionalConverter'     => new NullableStringToNullableIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_INTEGER )
			],
			319 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			320 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			321 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			322 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			323 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			324 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			325 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			326 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			327 => [
				'biDirectionalConverter'     => new StringToBoolBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN )
			],
			328 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			329 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			330 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			331 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			332 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			333 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			334 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			335 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			336 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			337 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME )
			],
			338 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			339 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			340 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			341 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			342 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			343 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			344 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			345 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			346 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			347 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME )
			],
			348 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			349 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			350 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			351 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			352 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			353 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			354 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			355 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			356 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			357 => [
				'biDirectionalConverter'     => new StringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME )
			],
			358 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			359 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			360 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			361 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			362 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			363 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			364 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			365 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			366 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			367 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			368 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			369 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			370 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			371 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			372 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			373 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			374 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			375 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			376 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			377 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			378 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			379 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			380 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			381 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			382 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			383 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			384 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			385 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			386 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			387 => [
				'biDirectionalConverter'     => new StringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			388 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::FLOAT )
			],
			389 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			390 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			391 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::FLOAT )
			],
			392 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::FLOAT )
			],
			393 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::FLOAT )
			],
			394 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::FLOAT )
			],
			395 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			396 => [
				'biDirectionalConverter'     => new StringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::FLOAT )
			],
			397 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			398 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			399 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			400 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			401 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			402 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			403 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			404 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			405 => [
				'biDirectionalConverter'     => new StringToIntBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::INTEGER )
			]
		];
	}
}
