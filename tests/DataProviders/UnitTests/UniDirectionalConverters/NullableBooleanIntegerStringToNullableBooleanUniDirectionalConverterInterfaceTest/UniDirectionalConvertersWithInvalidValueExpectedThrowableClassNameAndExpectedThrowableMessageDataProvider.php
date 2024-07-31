<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use Override;
use function implode;
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
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_INTEGER_STRING
						]
					)
				)
			],
			1 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_INTEGER_STRING
						]
					)
				)
			],
			2 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_INTEGER_STRING
						]
					)
				)
			],
			3 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_INTEGER_STRING
						]
					)
				)
			],
			4 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_INTEGER_STRING
						]
					)
				)
			],
			5 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_INTEGER_STRING
						]
					)
				)
			],
			6 => [
				'uniDirectionalConverter'    => new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter(),
				'invalidValue'               => $invalidValue = Values::DATETIME_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							Values::REGEX_BOOLEAN_INTEGER_STRING
						]
					)
				)
			]
		];
	}
}
