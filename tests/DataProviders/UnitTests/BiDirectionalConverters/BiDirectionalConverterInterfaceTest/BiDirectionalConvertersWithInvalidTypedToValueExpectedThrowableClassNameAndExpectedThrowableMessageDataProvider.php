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
use CodeKandis\Converters\Tests\Fixtures\Types;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
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
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			1   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			2   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			3   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			4   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			5   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			6   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			7   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			8   => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			9   => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			10  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			11  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			12  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			13  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			14  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			15  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			16  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			17  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			18  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			19  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			20  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			21  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			22  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			23  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			24  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			25  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			26  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			27  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			28  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			29  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			30  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			31  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			32  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			33  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			34  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			35  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			36  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			37  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			38  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			39  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			40  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			41  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			42  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			43  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			44  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			45  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			46  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			47  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			48  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			49  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			50  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			51  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			52  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			53  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			54  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			55  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			56  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			57  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			58  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			59  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			60  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			61  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			62  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			63  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			64  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			65  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			66  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			67  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			68  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			69  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			70  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			71  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			72  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			73  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			74  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			75  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			76  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			77  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			78  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			79  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			80  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			81  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			82  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			83  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			84  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			85  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			86  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			87  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			88  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			89  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			90  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			91  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			92  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			93  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			94  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			95  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			96  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			97  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			98  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			99  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			100 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			101 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			102 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			103 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			104 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			105 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			106 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			107 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			108 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			109 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			110 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			111 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			112 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			113 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			114 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			115 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			116 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			117 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			118 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			119 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			120 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			121 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			122 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			123 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			124 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			125 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			126 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			127 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			128 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			129 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			130 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			131 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			132 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			133 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			134 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			135 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			136 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			137 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			138 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			139 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			140 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			141 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			142 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			143 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			144 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			145 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			146 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			147 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			148 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			149 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			150 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			151 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			152 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			153 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			154 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			155 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			156 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			157 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			158 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			159 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			160 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			161 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			162 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			163 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			164 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			165 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			166 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			167 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			168 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			169 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			170 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			171 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			172 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			173 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			174 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			175 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			176 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			177 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			178 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			179 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			180 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			181 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			182 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			183 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			184 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			185 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			186 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			187 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			188 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			189 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			190 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			191 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			192 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			193 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			194 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			195 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			196 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			197 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			198 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			199 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			200 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			201 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			202 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			203 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			204 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			205 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			206 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			207 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			208 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			209 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::DATETIME
				)
			],
			210 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			211 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			212 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			213 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			214 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			215 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			216 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			217 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			218 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			219 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			220 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::FLOAT )
			],
			221 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::FLOAT )
			],
			222 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::FLOAT )
			],
			223 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::FLOAT
				)
			],
			224 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::FLOAT
				)
			],
			225 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::FLOAT )
			],
			226 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::FLOAT )
			],
			227 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::FLOAT
				)
			],
			228 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			229 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::FLOAT
				)
			],
			230 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			231 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			232 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			233 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			234 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			235 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			236 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			237 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			238 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			239 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::STRING
				)
			],
			240 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			241 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			242 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			243 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			244 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			245 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			246 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			247 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			248 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			249 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			250 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			251 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			252 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			253 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			254 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			255 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			256 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			257 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			258 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			259 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::INTEGER
				)
			],
			260 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			261 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			262 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			263 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			264 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			265 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			266 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			267 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			268 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			269 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			270 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			271 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			272 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			273 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			274 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			275 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			276 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			277 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			278 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			279 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			280 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			281 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			282 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			283 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			284 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			285 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			286 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			287 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			288 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			289 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			290 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			291 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			292 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			293 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			294 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			295 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			296 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			297 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			298 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			299 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			300 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			301 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			302 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			303 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			304 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			305 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			306 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			307 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			308 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			309 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			310 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			311 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			312 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			313 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			314 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			315 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			316 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			317 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			318 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			319 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			320 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			321 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			322 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			323 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			324 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			325 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			326 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			327 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			328 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			329 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			330 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			331 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			332 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			333 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			334 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			335 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			336 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			337 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			338 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			339 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			340 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			341 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			342 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			343 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			344 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			345 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			346 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			347 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			348 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			349 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			350 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			351 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			352 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			353 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			354 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			355 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			356 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			357 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			358 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			359 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			360 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			361 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			362 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			363 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			364 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			365 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			366 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			367 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			368 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			369 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			370 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			371 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			372 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			373 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			374 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			375 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			376 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			377 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			378 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			379 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			380 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			381 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			382 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			383 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			384 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			385 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			386 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			387 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			388 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			389 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			390 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			391 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			392 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			393 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			394 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			395 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			396 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			397 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			398 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			399 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			400 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			401 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			402 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			403 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			404 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			405 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			406 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			407 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			408 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			409 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			410 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			411 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			412 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			413 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			414 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			415 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			416 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			417 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			418 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			419 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			420 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			421 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			422 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			423 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			424 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			425 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			426 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			427 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			428 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			429 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			430 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			431 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			432 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			433 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			434 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			435 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			436 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			437 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			438 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			439 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			440 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			441 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			442 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			443 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			444 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			445 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			446 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			447 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			448 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			449 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			450 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			451 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			452 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			453 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			454 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			455 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			456 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			457 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			458 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			459 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			460 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			461 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			462 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			463 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			464 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			465 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			466 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			467 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			468 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			469 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			470 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			471 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			472 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			473 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			474 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			475 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			476 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			477 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			478 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			479 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			480 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			481 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			482 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			483 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			484 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			485 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			486 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			487 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			488 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			489 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			490 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			491 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			492 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			493 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			494 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			495 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			496 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedToValue'        => $invalidTypedToValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedToValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			]
		];
	}
}
