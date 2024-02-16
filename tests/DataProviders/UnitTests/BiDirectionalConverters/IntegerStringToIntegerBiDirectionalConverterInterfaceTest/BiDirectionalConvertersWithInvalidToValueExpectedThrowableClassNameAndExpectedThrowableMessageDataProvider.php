<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\IntegerStringToIntegerBiDirectionalConverter;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing bidirectional converters with invalid to value, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::REGEX_INTEGER_STRING )
			],
			1 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::REGEX_INTEGER_STRING )
			],
			2 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::REGEX_INTEGER_STRING )
			],
			3 => [
				'biDirectionalConverter'     => new IntegerStringToIntegerBiDirectionalConverter(),
				'invalidToValue'             => $invalidToValue = Values::DATETIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidToValue, Values::REGEX_INTEGER_STRING )
			]
		];
	}
}
