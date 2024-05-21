<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\Tests\Fixtures\TypedValues;
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
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			1   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			2   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			3   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			4   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			5   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			6   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			7   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			8   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			9   => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			10  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			11  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			12  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			13  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			14  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			15  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			16  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			17  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			18  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			19  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			20  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::BOOLEAN_ARRAY )
			],
			21  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			22  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			23  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			24  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			25  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			26  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN_ARRAY )
			],
			27  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			28  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			29  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			30  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			31  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			32  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			33  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			34  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			35  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			36  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			37  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			38  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			39  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			40  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			41  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			42  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			43  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			44  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::INTEGER )
			],
			45  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			46  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			47  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			48  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			49  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			50  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			51  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			52  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			53  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			54  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			55  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			56  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			57  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			58  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			59  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			60  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			61  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			62  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN )
			],
			63  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			64  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			65  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			66  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			67  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			68  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			69  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			70  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			71  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN )
			],
			72  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::BOOLEAN )
			],
			73  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			74  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::BOOLEAN )
			],
			75  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::BOOLEAN )
			],
			76  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::BOOLEAN )
			],
			77  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::BOOLEAN )
			],
			78  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::BOOLEAN )
			],
			79  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			80  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::BOOLEAN )
			],
			81  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			82  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			83  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			84  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			85  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			86  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			87  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			88  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			89  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			90  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			91  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			92  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			93  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			94  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			95  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			96  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			97  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			98  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			99  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			100 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			101 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			102 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			103 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			104 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			105 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			106 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			107 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			108 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			109 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			110 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			111 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			112 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			113 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			114 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			115 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			116 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			117 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			118 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			119 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			120 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			121 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			122 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			123 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			124 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			125 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			126 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			127 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			128 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			129 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			130 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			131 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			132 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			133 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			134 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			135 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			136 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			137 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			138 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			139 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			140 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			141 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			142 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			143 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			144 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			145 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			146 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			147 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			148 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			149 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			150 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			151 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			152 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			153 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			154 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			155 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			156 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			157 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			158 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			159 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			160 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			161 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			162 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			163 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			164 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			165 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			166 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			167 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			168 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			169 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			170 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			171 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			172 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			173 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			174 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			175 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			176 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			177 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			178 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			179 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			180 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			181 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			182 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			183 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME )
			],
			184 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			185 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			186 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			187 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			188 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			189 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			190 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			191 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			192 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			193 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME )
			],
			194 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::DATETIME )
			],
			195 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			196 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::DATETIME )
			],
			197 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::DATETIME )
			],
			198 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::DATETIME )
			],
			199 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::DATETIME )
			],
			200 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::DATETIME )
			],
			201 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::DATETIME )
			],
			202 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			203 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::DATETIME )
			],
			204 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			205 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			206 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			207 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			208 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			209 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			210 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			211 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			212 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			213 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::FLOAT )
			],
			214 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			215 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::FLOAT )
			],
			216 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::FLOAT )
			],
			217 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::FLOAT )
			],
			218 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::FLOAT )
			],
			219 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::FLOAT )
			],
			220 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			221 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::FLOAT )
			],
			222 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::STRING )
			],
			223 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			224 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::STRING )
			],
			225 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::STRING )
			],
			226 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::STRING )
			],
			227 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::STRING )
			],
			228 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::STRING )
			],
			229 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			230 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::STRING )
			],
			231 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			232 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			233 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			234 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			235 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			236 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			237 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			238 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			239 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::INTEGER )
			],
			240 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::NULL, ExpectedTypes::INTEGER )
			],
			241 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			242 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::INTEGER )
			],
			243 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::INTEGER )
			],
			244 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::INTEGER )
			],
			245 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::INTEGER )
			],
			246 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::INTEGER )
			],
			247 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			248 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::INTEGER )
			],
			249 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			250 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			251 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			252 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			253 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			254 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			255 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			256 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			257 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			258 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			259 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			260 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			261 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			262 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			263 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			264 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			265 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			266 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			267 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			268 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			269 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			270 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			271 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			272 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			273 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			274 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			275 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			276 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			277 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			278 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			279 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			280 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			281 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			282 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			283 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			284 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			285 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			286 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			287 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			288 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			289 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			290 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			291 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			292 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			293 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			294 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			295 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			296 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			297 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			298 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			299 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			300 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			301 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			302 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			303 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			304 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			305 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			306 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			307 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			308 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			309 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			310 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			311 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			312 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			313 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			314 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			315 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			316 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			317 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			318 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			319 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			320 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			321 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			322 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			323 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			324 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			325 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			326 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			327 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			328 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			329 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			330 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			331 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			332 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			333 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			334 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			335 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			336 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			337 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			338 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			339 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			340 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			341 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			342 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			343 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			344 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			345 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			346 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			347 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			348 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			349 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			350 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			351 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			352 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			353 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			354 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			355 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			356 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			357 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			358 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			359 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			360 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			361 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			362 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			363 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			364 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			365 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			366 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			367 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			368 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			369 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			370 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			371 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			372 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			373 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			374 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			375 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			376 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_DATETIME )
			],
			377 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			378 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			379 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			380 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			381 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			382 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_DATETIME )
			],
			383 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			384 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			385 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			386 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			387 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			388 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			389 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			390 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			391 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			392 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			393 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_FLOAT )
			],
			394 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			395 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			396 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			397 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			398 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_FLOAT )
			],
			399 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			400 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			401 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_STRING )
			],
			402 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			403 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			404 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			405 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			406 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_STRING )
			],
			407 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			408 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			409 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::BOOLEAN,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::BOOLEAN, ExpectedTypes::NULLABLE_INTEGER )
			],
			410 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			411 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			412 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			413 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, StraightTypes::CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			414 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE, $invalidTypedValue::class, ExpectedTypes::NULLABLE_INTEGER )
			]
		];
	}
}
