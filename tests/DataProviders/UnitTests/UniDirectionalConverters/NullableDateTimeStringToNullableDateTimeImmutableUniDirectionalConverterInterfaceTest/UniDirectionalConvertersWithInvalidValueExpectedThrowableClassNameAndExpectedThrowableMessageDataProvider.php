<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter;
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
			0  => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			15 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			16 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::NULL_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			17 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			18 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			19 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			20 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			21 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			22 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
			23 => [
				'uniDirectionalConverter'    => new NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
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
