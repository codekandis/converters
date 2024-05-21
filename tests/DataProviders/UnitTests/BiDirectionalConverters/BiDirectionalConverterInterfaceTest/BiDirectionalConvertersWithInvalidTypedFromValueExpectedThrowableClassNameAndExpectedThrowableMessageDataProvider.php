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
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			1   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			2   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::BOOLEAN_ARRAY )
			],
			3   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			4   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			5   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			6   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			7   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			8   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN_ARRAY )
			],
			9   => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			10  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			11  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			12  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			13  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			14  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			15  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			16  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			17  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::INTEGER )
			],
			18  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			19  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			20  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			21  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			22  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			23  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			24  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			25  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			26  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			27  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			28  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			29  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			30  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			31  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			32  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			33  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			34  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			35  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN )
			],
			36  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			37  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			38  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			39  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			40  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			41  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			42  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			43  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			44  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN )
			],
			45  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			46  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			47  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			48  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			49  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			50  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			51  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			52  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			53  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::BOOLEAN )
			],
			54  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			55  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			56  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			57  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			58  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			59  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			60  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			61  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			62  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::INTEGER )
			],
			63  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			64  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			65  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			66  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			67  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			68  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			69  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			70  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			71  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			72  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			73  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			74  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			75  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			76  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			77  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			78  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			79  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			80  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			81  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			82  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			83  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			84  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			85  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			86  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			87  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			88  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			89  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			90  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			91  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			92  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			93  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			94  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			95  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			96  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			97  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			98  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			99  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			100 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			101 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			102 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			103 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			104 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			105 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			106 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			107 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			108 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			109 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			110 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			111 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			112 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			113 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			114 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			115 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			116 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			117 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME )
			],
			118 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			119 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			120 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			121 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			122 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			123 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			124 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			125 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			126 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			127 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME )
			],
			128 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			129 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			130 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			131 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			132 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			133 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			134 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			135 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			136 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			137 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME )
			],
			138 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			139 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			140 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			141 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			142 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			143 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			144 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			145 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			146 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			147 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			148 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			149 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			150 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			151 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			152 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			153 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			154 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			155 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			156 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			157 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			158 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			159 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			160 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			161 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			162 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			163 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			164 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			165 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			166 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			167 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			168 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			169 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			170 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			171 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			172 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			173 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			174 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			175 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			176 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			177 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			178 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			179 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			180 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			181 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			182 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			183 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			184 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			185 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			186 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			187 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			188 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			189 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			190 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			191 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			192 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			193 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			194 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			195 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::FLOAT )
			],
			196 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			197 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			198 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::FLOAT )
			],
			199 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::FLOAT )
			],
			200 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::FLOAT )
			],
			201 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::FLOAT )
			],
			202 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			203 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::FLOAT )
			],
			204 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			205 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			206 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			207 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			208 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			209 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			210 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			211 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			212 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			213 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			214 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			215 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			216 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			217 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			218 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			219 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			220 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			221 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::INTEGER )
			],
			222 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			223 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			224 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			225 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			226 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			227 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			228 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			229 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			230 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			231 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			232 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			233 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			234 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			235 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			236 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			237 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			238 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			239 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::STRING )
			],
			240 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			241 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			242 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			243 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			244 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			245 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			246 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			247 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			248 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			249 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			250 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			251 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			252 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			253 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			254 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			255 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_INTEGER )
			],
			256 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			257 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			258 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			259 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			260 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			261 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			262 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			263 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			264 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			265 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			266 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			267 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			268 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			269 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			270 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			271 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			272 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			273 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			274 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			275 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			276 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			277 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			278 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			279 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			280 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			281 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			282 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			283 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			284 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			285 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			286 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			287 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			288 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			289 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			290 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			291 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			292 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			293 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			294 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			295 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_INTEGER )
			],
			296 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			297 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			298 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			299 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			300 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			301 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			302 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			303 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			304 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			305 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			306 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			307 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			308 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			309 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			310 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			311 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			312 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			313 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			314 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			315 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			316 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			317 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			318 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			319 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			320 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			321 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			322 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			323 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			324 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			325 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			326 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			327 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			328 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			329 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			330 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			331 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			332 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			333 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			334 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			335 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			336 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			337 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			338 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			339 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			340 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			341 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			342 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			343 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			344 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			345 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			346 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			347 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			348 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			349 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			350 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			351 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			352 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			353 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			354 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			355 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			356 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			357 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			358 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			359 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			360 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			361 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			362 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			363 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			364 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			365 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			366 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			367 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			368 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			369 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			370 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			371 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			372 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			373 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			374 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			375 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			376 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			377 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			378 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			379 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			380 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			381 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			382 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			383 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			384 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			385 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			386 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			387 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			388 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			389 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			390 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			391 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			392 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			393 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			394 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			395 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			396 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			397 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			398 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			399 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			400 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			401 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			402 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			403 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			404 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			405 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			406 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			407 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			408 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			409 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			410 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			411 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			412 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			413 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			414 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			415 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			416 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_FLOAT )
			],
			417 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			418 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			419 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			420 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			421 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_FLOAT )
			],
			422 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			423 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			424 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			425 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			426 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			427 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			428 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			429 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			430 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			431 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			432 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			433 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			434 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			435 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			436 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			437 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_INTEGER )
			],
			438 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			439 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			440 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			441 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			442 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			443 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			444 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			445 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			446 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			447 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			448 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			449 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			450 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			451 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			452 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			453 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedFromValue::class, ExpectedTypes::NULLABLE_STRING )
			]
		];
	}
}
