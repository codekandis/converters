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
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\Tests\Fixtures\TypedValues;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\StraightTypes;
use Override;
use function sprintf;

/**
 * Represents a data provider providing bidirectional converters with invalid typed to value, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidTypedToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			1   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			2   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			3   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			4   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			5   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			6   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			7   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			8   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			9   => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			10  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			11  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			12  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			13  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			14  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			15  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			16  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			17  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			18  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			19  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			20  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::BOOLEAN_ARRAY )
			],
			21  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			22  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			23  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			24  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			25  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			26  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::BOOLEAN_ARRAY )
			],
			27  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			28  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			29  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			30  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			31  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			32  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			33  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			34  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			35  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			36  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			37  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			38  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			39  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			40  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			41  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			42  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			43  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			44  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::INTEGER )
			],
			45  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			46  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			47  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			48  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			49  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			50  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			51  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			52  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			53  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			54  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			55  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			56  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			57  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			58  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			59  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			60  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			61  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			62  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::BOOLEAN )
			],
			63  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			64  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			65  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			66  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			67  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			68  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			69  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			70  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			71  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::BOOLEAN )
			],
			72  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			73  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			74  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			75  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			76  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			77  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			78  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			79  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			80  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::BOOLEAN )
			],
			81  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			82  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			83  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			84  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			85  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			86  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			87  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			88  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			89  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			90  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			91  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			92  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			93  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			94  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			95  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			96  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			97  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			98  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			99  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			100 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			101 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			102 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			103 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			104 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			105 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			106 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			107 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			108 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			109 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			110 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			111 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			112 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			113 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			114 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			115 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			116 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			117 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			118 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			119 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			120 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			121 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			122 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			123 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			124 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			125 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			126 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			127 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			128 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			129 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			130 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			131 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			132 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			133 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			134 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			135 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			136 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			137 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			138 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			139 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			140 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			141 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			142 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			143 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			144 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			145 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			146 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			147 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			148 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			149 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			150 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			151 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			152 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			153 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			154 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			155 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			156 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			157 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			158 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			159 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			160 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			161 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			162 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			163 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			164 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			165 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			166 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			167 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			168 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			169 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			170 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			171 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			172 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			173 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			174 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::DATETIME )
			],
			175 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			176 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			177 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			178 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			179 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			180 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			181 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			182 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			183 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			184 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::DATETIME )
			],
			185 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			186 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			187 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			188 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			189 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			190 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			191 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			192 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			193 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			194 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::DATETIME )
			],
			195 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			196 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			197 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			198 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			199 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			200 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			201 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			202 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			203 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			204 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::FLOAT )
			],
			205 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			206 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			207 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::FLOAT )
			],
			208 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::FLOAT )
			],
			209 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::FLOAT )
			],
			210 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::FLOAT )
			],
			211 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			212 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::FLOAT )
			],
			213 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			214 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			215 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			216 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			217 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			218 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			219 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			220 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			221 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::STRING )
			],
			222 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			223 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			224 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			225 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			226 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			227 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			228 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			229 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			230 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::INTEGER )
			],
			231 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			232 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			233 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			234 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			235 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			236 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			237 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			238 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			239 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::INTEGER )
			],
			240 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			241 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			242 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			243 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			244 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			245 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			246 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			247 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			248 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			249 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			250 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			251 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			252 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			253 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			254 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			255 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			256 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			257 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			258 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			259 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			260 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			261 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			262 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			263 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			264 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			265 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			266 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			267 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			268 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			269 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			270 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			271 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			272 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			273 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			274 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			275 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			276 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			277 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			278 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			279 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_INTEGER )
			],
			280 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			281 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			282 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			283 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			284 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			285 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			286 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			287 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			288 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			289 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			290 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			291 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			292 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			293 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			294 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			295 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			296 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			297 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			298 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			299 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			300 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			301 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			302 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			303 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			304 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			305 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			306 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			307 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			308 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			309 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			310 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			311 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			312 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			313 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			314 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			315 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			316 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			317 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			318 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			319 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			320 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			321 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			322 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			323 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			324 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			325 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			326 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			327 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			328 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			329 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			330 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			331 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			332 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			333 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			334 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			335 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			336 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			337 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			338 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			339 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			340 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			341 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			342 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			343 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			344 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			345 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			346 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			347 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			348 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			349 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			350 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			351 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			352 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			353 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			354 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			355 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			356 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			357 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			358 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			359 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			360 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			361 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			362 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			363 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			364 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			365 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			366 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			367 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			368 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			369 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			370 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			371 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			372 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			373 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			374 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			375 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			376 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			377 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			378 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			379 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			380 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			381 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			382 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			383 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			384 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			385 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			386 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			387 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			388 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			389 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			390 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			391 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			392 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			393 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			394 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			395 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			396 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			397 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			398 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			399 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			400 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			401 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			402 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			403 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			404 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			405 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			406 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			407 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			408 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			409 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			410 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			411 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			412 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			413 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			414 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			415 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			416 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			417 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			418 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			419 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			420 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			421 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			422 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			423 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			424 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_FLOAT )
			],
			425 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			426 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			427 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			428 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			429 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_FLOAT )
			],
			430 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			431 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			432 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			433 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			434 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			435 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			436 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			437 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			438 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			439 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			440 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			441 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			442 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			443 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			444 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			445 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_INTEGER )
			],
			446 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			447 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			448 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			449 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			450 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			451 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			452 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			453 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedToValue::class, ExpectedTypes::NULLABLE_INTEGER )
			]
		];
	}
}
