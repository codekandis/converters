<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\BinaryStringToBooleanArrayUniDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing unidirectional converters with invalid value, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class UniDirectionalConvertersWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REGEX_BINARY_STRING )
			],
			1 => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REGEX_BINARY_STRING )
			],
			2 => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REGEX_BINARY_STRING )
			],
			3 => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REGEX_BINARY_STRING )
			],
			4 => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REGEX_BINARY_STRING )
			],
			5 => [
				'uniDirectionalConverter'    => new BinaryStringToBooleanArrayUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::DATETIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, Values::REGEX_BINARY_STRING )
			]
		];
	}
}
