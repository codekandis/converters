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
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN_ARRAY )
			],
			1   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN_ARRAY )
			],
			2   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			3   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			4   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN_ARRAY )
			],
			5   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN_ARRAY )
			],
			6   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN_ARRAY )
			],
			7   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			8   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN_ARRAY )
			],
			9   => [
				'biDirectionalConverter'     => new BinaryStringToBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN_ARRAY
				)
			],
			10  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			11  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			12  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			13  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			14  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			15  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			16  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			17  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			18  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			19  => [
				'biDirectionalConverter'     => new BinaryStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			20  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			21  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			22  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			23  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			24  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			25  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			26  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			27  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			28  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			29  => [
				'biDirectionalConverter'     => new BooleanArrayToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			30  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			31  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			32  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			33  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			34  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			35  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			36  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			37  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			38  => [
				'biDirectionalConverter'     => new BooleanIntegerStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			39  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			40  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			41  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			42  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			43  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			44  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			45  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			46  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			47  => [
				'biDirectionalConverter'     => new BooleanIntegerToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			48  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::BOOLEAN )
			],
			49  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			50  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::BOOLEAN )
			],
			51  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::BOOLEAN )
			],
			52  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::BOOLEAN )
			],
			53  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::BOOLEAN )
			],
			54  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			55  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::BOOLEAN )
			],
			56  => [
				'biDirectionalConverter'     => new BooleanStringToBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::BOOLEAN
				)
			],
			57  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			58  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			59  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			60  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			61  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			62  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			63  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			64  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			65  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			66  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			67  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			68  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			69  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			70  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			71  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			72  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			73  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			74  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			75  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			76  => [
				'biDirectionalConverter'     => new BooleanToBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			77  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			78  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			79  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			80  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			81  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			82  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			83  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			84  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			85  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			86  => [
				'biDirectionalConverter'     => new BooleanToBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			87  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			88  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			89  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			90  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			91  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			92  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			93  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			94  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			95  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			96  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			97  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			98  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			99  => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			100 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			101 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			102 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			103 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			104 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			105 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			106 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			107 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			108 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			109 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			110 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			111 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			112 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			113 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			114 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			115 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			116 => [
				'biDirectionalConverter'     => new DateTimeImmutableToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			117 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			118 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			119 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			120 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			121 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			122 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			123 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			124 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			125 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			126 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			127 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			128 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			129 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			130 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			131 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			132 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			133 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			134 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			135 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			136 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			137 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			138 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			139 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME )
			],
			140 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			141 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME )
			],
			142 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			143 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			144 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME )
			],
			145 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME )
			],
			146 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME )
			],
			147 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			148 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME )
			],
			149 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME
				)
			],
			150 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			151 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			152 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			153 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			154 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			155 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			156 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			157 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			158 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			159 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			160 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			161 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			162 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			163 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			164 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			165 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			166 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			167 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			168 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			169 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			170 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			171 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			172 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			173 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			174 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			175 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			176 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			177 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			178 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			179 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			180 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			181 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::DATETIME_IMMUTABLE )
			],
			182 => [
				'biDirectionalConverter'     => new DateTimeStringToDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::DATETIME_IMMUTABLE
				)
			],
			183 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			184 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			185 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			186 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			187 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			188 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			189 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			190 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			191 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			192 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			193 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			194 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			195 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			196 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			197 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			198 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			199 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			200 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			201 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			202 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			203 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			204 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			205 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			206 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			207 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			208 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			209 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			210 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			211 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			212 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			213 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::FLOAT )
			],
			214 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::FLOAT )
			],
			215 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::FLOAT )
			],
			216 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::FLOAT
				)
			],
			217 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::FLOAT
				)
			],
			218 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::FLOAT )
			],
			219 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::FLOAT )
			],
			220 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::FLOAT
				)
			],
			221 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::FLOAT )
			],
			222 => [
				'biDirectionalConverter'     => new FloatStringToFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::FLOAT
				)
			],
			223 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			224 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			225 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			226 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			227 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			228 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			229 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			230 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			231 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			232 => [
				'biDirectionalConverter'     => new FloatToFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			233 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::INTEGER )
			],
			234 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			235 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::INTEGER )
			],
			236 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			237 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			238 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::INTEGER )
			],
			239 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::INTEGER )
			],
			240 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			241 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::INTEGER )
			],
			242 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::INTEGER
				)
			],
			243 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			244 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			245 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			246 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			247 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			248 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			249 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			250 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			251 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			252 => [
				'biDirectionalConverter'     => new IntegerToBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			253 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NULL,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_NULL, ExpectedTypes::STRING )
			],
			254 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			255 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::STRING )
			],
			256 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			257 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			258 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::STRING )
			],
			259 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::STRING )
			],
			260 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			261 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::STRING )
			],
			262 => [
				'biDirectionalConverter'     => new IntegerToIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::STRING
				)
			],
			263 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			264 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			265 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			266 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			267 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			268 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			269 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			270 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY )
			],
			271 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN_ARRAY
				)
			],
			272 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			273 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			274 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			275 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			276 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			277 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			278 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			279 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			280 => [
				'biDirectionalConverter'     => new NullableBinaryStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			281 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			282 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			283 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			284 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			285 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			286 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			287 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			288 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			289 => [
				'biDirectionalConverter'     => new NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			290 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			291 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			292 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			293 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			294 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			295 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			296 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			297 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			298 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			299 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			300 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			301 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			302 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			303 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			304 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			305 => [
				'biDirectionalConverter'     => new NullableBooleanIntegerToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			306 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			307 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			308 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			309 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			310 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			311 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			312 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_BOOLEAN )
			],
			313 => [
				'biDirectionalConverter'     => new NullableBooleanStringToNullableBooleanBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_BOOLEAN
				)
			],
			314 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			315 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			316 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			317 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			318 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			319 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			320 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			321 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			322 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			323 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			324 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			325 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			326 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			327 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			328 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			329 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			330 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			331 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			332 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			333 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			334 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			335 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			336 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			337 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			338 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			339 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			340 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			341 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			342 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			343 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			344 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			345 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			346 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			347 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			348 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			349 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			350 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			351 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			352 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			353 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			354 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			355 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			356 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			357 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			358 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			359 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			360 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			361 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			362 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			363 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			364 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			365 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			366 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			367 => [
				'biDirectionalConverter'     => new NullableDateTimeImmutableToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			368 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			369 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			370 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			371 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			372 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			373 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			374 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			375 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			376 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			377 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			378 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			379 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			380 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			381 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			382 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			383 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			384 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			385 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			386 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			387 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			388 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			389 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME )
			],
			390 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			391 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			392 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME )
			],
			393 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME )
			],
			394 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME )
			],
			395 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			396 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME )
			],
			397 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME
				)
			],
			398 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			399 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			400 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			401 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			402 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			403 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			404 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			405 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			406 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			407 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			408 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			409 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			410 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			411 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			412 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			413 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			414 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			415 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			416 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			417 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			418 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			419 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			420 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			421 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			422 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			423 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			424 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			425 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			426 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE )
			],
			427 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE
				)
			],
			428 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			429 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			430 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			431 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			432 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			433 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			434 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			435 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			436 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			437 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			438 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			439 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			440 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			441 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			442 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			443 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			444 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			445 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter( Values::DATETIME_FORMAT, Values::NULL ),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			446 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			447 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			448 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			449 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			450 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			451 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			452 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			453 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			454 => [
				'biDirectionalConverter'     => new NullableDateTimeToNullableDateTimeStringBiDirectionalConverter(
					Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			455 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			456 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_FLOAT )
			],
			457 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			458 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			459 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_FLOAT )
			],
			460 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_FLOAT )
			],
			461 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			462 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_FLOAT )
			],
			463 => [
				'biDirectionalConverter'     => new NullableFloatStringToNullableFloatBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_FLOAT
				)
			],
			464 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			465 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			466 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			467 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			468 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			469 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			470 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			471 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			472 => [
				'biDirectionalConverter'     => new NullableFloatToNullableFloatStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			473 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			474 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_INTEGER )
			],
			475 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			476 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			477 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_INTEGER )
			],
			478 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::STRING,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_STRING, ExpectedTypes::NULLABLE_INTEGER )
			],
			479 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			480 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_INTEGER )
			],
			481 => [
				'biDirectionalConverter'     => new NullableIntegerStringToNullableIntegerBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_INTEGER
				)
			],
			482 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			483 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			484 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			485 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			486 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			487 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			488 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			489 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			490 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableBinaryStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			491 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			492 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::NONBOOLEAN_ARRAY,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_ARRAY, ExpectedTypes::NULLABLE_STRING )
			],
			493 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_FALSE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			494 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::BOOLEAN_TRUE,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedBooleanTypeByValue( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			495 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::INTEGER,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_INTEGER, ExpectedTypes::NULLABLE_STRING )
			],
			496 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::FLOAT,
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_FLOAT, ExpectedTypes::NULLABLE_STRING )
			],
			497 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedResourceTypeByResource( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			],
			498 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => TypedValues::createClosedResource(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES, Types::TYPE_HINT_CLOSED_RESOURCE, ExpectedTypes::NULLABLE_STRING )
			],
			499 => [
				'biDirectionalConverter'     => new NullableIntegerToNullableIntegerStringBiDirectionalConverter(),
				'invalidTypedFromValue'      => $invalidTypedFromValue = TypedValues::createObject(),
				'expectedThrowableClassName' => InvalidTypeException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::createTypeHintTypedObjectTypeByObject( $invalidTypedFromValue )
					, ExpectedTypes::NULLABLE_STRING
				)
			]
		];
	}
}
