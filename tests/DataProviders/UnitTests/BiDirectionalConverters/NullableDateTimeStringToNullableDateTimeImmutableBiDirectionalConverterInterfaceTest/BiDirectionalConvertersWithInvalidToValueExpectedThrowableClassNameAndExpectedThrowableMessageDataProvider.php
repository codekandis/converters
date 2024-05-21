<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter;
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
class BiDirectionalConvertersWithInvalidToValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			1  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			2  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidToValue'             => $invalidToValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			3  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidToValue'             => $invalidToValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			4  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidToValue'             => $invalidToValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			5  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			6  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			7  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidToValue'             => $invalidToValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			8  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidToValue'             => $invalidToValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			9  => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidToValue'             => $invalidToValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			10 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			11 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidToValue'             => $invalidToValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			12 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidToValue'             => $invalidToValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			13 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidToValue'             => $invalidToValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			],
			14 => [
				'biDirectionalConverter'     => new NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidToValue'             => $invalidToValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidToValue,
					implode(
						' | ',
						[
							Values::NULL_STRING,
							sprintf(
								Values::TEMPLATE_DATETIME_STRING, $format
							)
						]
					)
				)
			]
		];
	}
}
