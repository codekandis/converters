<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\UniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\Tests\Fixtures\TypedValues;
use CodeKandis\Converters\Tests\Fixtures\Types;
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
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			1   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			2   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			3   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			4   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			5   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			6   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			7   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			8   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			9   => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			10  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			11  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			12  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			13  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			14  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			15  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			16  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			17  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			18  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			19  => [
				'uniDirectionalConverter'    => new BinaryStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			20  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			21  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			22  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			23  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			24  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			25  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			26  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			27  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			28  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			29  => [
				'uniDirectionalConverter'    => new BooleanArrayToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			30  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			31  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			32  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			33  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			34  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			35  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			36  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			37  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			38  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			39  => [
				'uniDirectionalConverter'    => new BooleanIntegerStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			40  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			41  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			42  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			43  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			44  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			45  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			46  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			47  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			48  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			49  => [
				'uniDirectionalConverter'    => new BooleanIntegerToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			50  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			51  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			52  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			53  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			54  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			55  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			56  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			57  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			58  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			59  => [
				'uniDirectionalConverter'    => new BooleanStringToBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			60  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			61  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			62  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			63  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			64  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			65  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			66  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			67  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			68  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			69  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			70  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			71  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			72  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			73  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			74  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			75  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			76  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			77  => [
				'uniDirectionalConverter'    => new BooleanToBooleanIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			78  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			79  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			80  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			81  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			82  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			83  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			84  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			85  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			86  => [
				'uniDirectionalConverter'    => new BooleanToBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			87  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			88  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			89  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			90  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			91  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			92  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			93  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			94  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			95  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			96  => [
				'uniDirectionalConverter'    => new ClassConstantsToArrayUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			97  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			98  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			99  => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			100 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			101 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			102 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			103 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			104 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			105 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			106 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			107 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			108 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			109 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			110 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			111 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			112 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			113 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			114 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			115 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			116 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			117 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			118 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			119 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			120 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			121 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			122 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			123 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			124 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			125 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			126 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			127 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			128 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			129 => [
				'uniDirectionalConverter'    => new DateTimeImmutableToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			130 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			131 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			132 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			133 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			134 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			135 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			136 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			137 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			138 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			139 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			140 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			141 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			142 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			143 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			144 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			145 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			146 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			147 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			148 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			149 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			150 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			151 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			152 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			153 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			154 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			155 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			156 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			157 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			158 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			159 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			160 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			161 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			162 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			163 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			164 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			165 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			166 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			167 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			168 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			169 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			170 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			171 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			172 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			173 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			174 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			175 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			176 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			177 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			178 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			179 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			180 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			181 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			182 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			183 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			184 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			185 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			186 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			187 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			188 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			189 => [
				'uniDirectionalConverter'    => new DateTimeStringToDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			190 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			191 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			192 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			193 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			194 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			195 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			196 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			197 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			198 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			199 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			200 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			201 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			202 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			203 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			204 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			205 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			206 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			207 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			208 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			209 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			210 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			211 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			212 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			213 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			214 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			215 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			216 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			217 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			218 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			219 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			220 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			221 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			222 => [
				'uniDirectionalConverter'    => new DateTimeToDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::DATETIME
				)
			],
			223 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			224 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			225 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			226 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			227 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			228 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			229 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			230 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			231 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			232 => [
				'uniDirectionalConverter'    => new FloatStringToFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			233 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::FLOAT )
			],
			234 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::FLOAT )
			],
			235 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::FLOAT )
			],
			236 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::FLOAT
				)
			],
			237 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::FLOAT
				)
			],
			238 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::FLOAT )
			],
			239 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::FLOAT )
			],
			240 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::FLOAT
				)
			],
			241 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			242 => [
				'uniDirectionalConverter'    => new FloatToFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::FLOAT
				)
			],
			243 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			244 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			245 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			246 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			247 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			248 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			249 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			250 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			251 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			252 => [
				'uniDirectionalConverter'    => new IntegerStringToIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::STRING
				)
			],
			253 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			254 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			255 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			256 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			257 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			258 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			259 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			260 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			261 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			262 => [
				'uniDirectionalConverter'    => new IntegerToBinaryStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			263 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			264 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			265 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			266 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			267 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			268 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			269 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			270 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			271 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			272 => [
				'uniDirectionalConverter'    => new IntegerToIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::INTEGER
				)
			],
			273 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			274 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			275 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			276 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			277 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			278 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			279 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			280 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			281 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			282 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			283 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			284 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			285 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			286 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			287 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			288 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			289 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			290 => [
				'uniDirectionalConverter'    => new NullableBooleanStringToNullableBooleanUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			291 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			292 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			293 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			294 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			295 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			296 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			297 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			298 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			299 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			300 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			301 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			302 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			303 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			304 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			305 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			306 => [
				'uniDirectionalConverter'    => new NullableBooleanToNullableBooleanStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			307 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			308 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			309 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			310 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			311 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			312 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			313 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			314 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			315 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			316 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			317 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			318 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			319 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			320 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			321 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			322 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			323 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			324 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			325 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			326 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			327 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			328 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			329 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			330 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			331 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			332 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			333 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			334 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			335 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			336 => [
				'uniDirectionalConverter'    => new NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			337 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			338 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			339 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			340 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			341 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			342 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			343 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			344 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			345 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			346 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			347 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			348 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			349 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			350 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			351 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			352 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			353 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			354 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			355 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			356 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			357 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			358 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			359 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			360 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			361 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			362 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			363 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			364 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			365 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			366 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			367 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			368 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			369 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			370 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			371 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			372 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			373 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			374 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			375 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			376 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			377 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			378 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			379 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			380 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			381 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			382 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			383 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			384 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			385 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			386 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			387 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			388 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			389 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			390 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			391 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			392 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			393 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			394 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			395 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			396 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			397 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			398 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			399 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			400 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			401 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			402 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			403 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			404 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			405 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			406 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			407 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			408 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			409 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			410 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			411 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			412 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			413 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			414 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			415 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			416 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			417 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			418 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			419 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			420 => [
				'uniDirectionalConverter'    => new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			421 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			422 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			423 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			424 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			425 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			426 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			427 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			428 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			429 => [
				'uniDirectionalConverter'    => new NullableFloatStringToNullableFloatUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			430 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			431 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			432 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			433 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			434 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			435 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			436 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			437 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			438 => [
				'uniDirectionalConverter'    => new NullableFloatToNullableFloatStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			439 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			440 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			441 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			442 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			443 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			444 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			445 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			446 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			447 => [
				'uniDirectionalConverter'    => new NullableIntegerStringToNullableIntegerUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			448 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			449 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			450 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			451 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			452 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			453 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			454 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			455 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			456 => [
				'uniDirectionalConverter'    => new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
				'invalidTypedValue'          => $invalidTypedValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			]
		];
	}
}
