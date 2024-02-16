<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\Tests\Fixtures\TypedValues;
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
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\StraightTypes;
use Override;
use function sprintf;

/**
 * Represents a data provider providing unidirectional converters with invalid typed value, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithInvalidTypedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			1   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			2   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			3   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			4   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			5   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			6   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			7   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			8   => [
				'uniDirectionalConverter'    => new BinaryStringToBoolArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			9   => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			10  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			11  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			12  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			13  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			14  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			15  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			16  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			17  => [
				'uniDirectionalConverter'    => new BinaryStringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			18  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			19  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			20  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::BOOLEAN_ARRAY )
			],
			21  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			22  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			23  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			24  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			25  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			26  => [
				'uniDirectionalConverter'    => new BoolArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN_ARRAY )
			],
			27  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			28  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			29  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			30  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			31  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			32  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			33  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			34  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			35  => [
				'uniDirectionalConverter'    => new BoolToIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN )
			],
			36  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			37  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			38  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			39  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			40  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			41  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			42  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			43  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			44  => [
				'uniDirectionalConverter'    => new BoolToIntUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN )
			],
			45  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			46  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			47  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			48  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			49  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			50  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			51  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			52  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			53  => [
				'uniDirectionalConverter'    => new BoolToStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN )
			],
			54  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			55  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			56  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			57  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			58  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			59  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			60  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			61  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			62  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			63  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			64  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			65  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			66  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			67  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			68  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			69  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			70  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			71  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			72  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			73  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			74  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			75  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			76  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			77  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			78  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			79  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			80  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			81  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			82  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			83  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			84  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			85  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			86  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			87  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			88  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			89  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			90  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			91  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			92  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			93  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME )
			],
			94  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			95  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			96  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			97  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			98  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			99  => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			100 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			101 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			102 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			103 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME )
			],
			104 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			105 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			106 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			107 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			108 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			109 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			110 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			111 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			112 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			113 => [
				'uniDirectionalConverter'    => new DateTimeToStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME )
			],
			114 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			115 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			116 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			117 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			118 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			119 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			120 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			121 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			122 => [
				'uniDirectionalConverter'    => new EnumerationClassToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			123 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::FLOAT )
			],
			124 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			125 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			126 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::FLOAT )
			],
			127 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::FLOAT )
			],
			128 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::FLOAT )
			],
			129 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::FLOAT )
			],
			130 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			131 => [
				'uniDirectionalConverter'    => new FloatToStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::FLOAT )
			],
			132 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			133 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			134 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			135 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			136 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			137 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			138 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			139 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			140 => [
				'uniDirectionalConverter'    => new IntStringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			141 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			142 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			143 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			144 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			145 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			146 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			147 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			148 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			149 => [
				'uniDirectionalConverter'    => new IntToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::INTEGER )
			],
			150 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			151 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			152 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			153 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			154 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			155 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			156 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			157 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			158 => [
				'uniDirectionalConverter'    => new IntToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::INTEGER )
			],
			159 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			160 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			161 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			162 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			163 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			164 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			165 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			166 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			167 => [
				'uniDirectionalConverter'    => new IntToStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::INTEGER )
			],
			168 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			169 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			170 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			171 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			172 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			173 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			174 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			175 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableIntStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			176 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			177 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			178 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			179 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			180 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			181 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			182 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			183 => [
				'uniDirectionalConverter'    => new NullableBoolToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			184 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			185 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			186 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			187 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			188 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			189 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			190 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			191 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			192 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			193 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			194 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			195 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			196 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			197 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			198 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			199 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			200 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			201 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			202 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			203 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			204 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			205 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			206 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			207 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			208 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			209 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			210 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			211 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			212 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			213 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			214 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			215 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			216 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			217 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			218 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			219 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			220 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			221 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			222 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			223 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			224 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			225 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			226 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			227 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			228 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			229 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			230 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			231 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			232 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			233 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			234 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			235 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			236 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			237 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			238 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			239 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			240 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_FLOAT )
			],
			241 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			242 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			243 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			244 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			245 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_FLOAT )
			],
			246 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			247 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			248 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			249 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			250 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			251 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			252 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			253 => [
				'uniDirectionalConverter'    => new NullableIntStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			254 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			255 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			256 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			257 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			258 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			259 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			260 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			261 => [
				'uniDirectionalConverter'    => new NullableIntToNullableStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_INTEGER )
			],
			262 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			263 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			264 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			265 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			266 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			267 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			268 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			269 => [
				'uniDirectionalConverter'    => new NullableStringToNullableBoolUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			270 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			271 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			272 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			273 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			274 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			275 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			276 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			277 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			278 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			279 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			280 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			281 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			282 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			283 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			284 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			285 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			286 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			287 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			288 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			289 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			290 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			291 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			292 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			293 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			294 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			295 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			296 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			297 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			298 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			299 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			300 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			301 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			302 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			303 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			304 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			305 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			306 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			307 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			308 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			309 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			310 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			311 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			312 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			313 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			314 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			315 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			316 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			317 => [
				'uniDirectionalConverter'    => new NullableStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			318 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			319 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			320 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			321 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			322 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			323 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			324 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			325 => [
				'uniDirectionalConverter'    => new NullableStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			326 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			327 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			328 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			329 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			330 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			331 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			332 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			333 => [
				'uniDirectionalConverter'    => new NullableStringToNullableIntUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			334 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			335 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			336 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			337 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			338 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			339 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			340 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			341 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			342 => [
				'uniDirectionalConverter'    => new StringToBoolUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			343 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			344 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			345 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			346 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			347 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			348 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			349 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			350 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			351 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			352 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			353 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			354 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			355 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			356 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			357 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			358 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			359 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			360 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			361 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			362 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			363 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			364 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			365 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			366 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			367 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			368 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			369 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			370 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			371 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			372 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			373 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			374 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			375 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			376 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			377 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			378 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			379 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			380 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			381 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			382 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			383 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			384 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			385 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			386 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			387 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			388 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			389 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			390 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			391 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			392 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			393 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			394 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			395 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			396 => [
				'uniDirectionalConverter'    => new StringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			397 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			398 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			399 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			400 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			401 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			402 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			403 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			404 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			405 => [
				'uniDirectionalConverter'    => new StringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			406 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			407 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			408 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			409 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			410 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			411 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			412 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			413 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			414 => [
				'uniDirectionalConverter'    => new StringToIntUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			]
		];
	}
}
