<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\NullableBooleanToNullableBooleanStringBiDirectionalConverter;
use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use Override;
use function implode;
use function sprintf;

/**
 * Represents a data provider providing bidirectional converters with invalid to value, expected throwable class name and expected throwable message.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_STRING
						]
					)
				)
			],
			1 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_STRING
						]
					)
				)
			],
			2 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_STRING
						]
					)
				)
			],
			3 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_STRING
						]
					)
				)
			],
			4 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_STRING
						]
					)
				)
			],
			5 => [
				'biDirectionalConverter'     => new NullableBooleanToNullableBooleanStringBiDirectionalConverter(),
				'invalidFromValue'           => $invalidFromValue = Values::DATETIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_STRING
						]
					)
				)
			]
		];
	}
}
