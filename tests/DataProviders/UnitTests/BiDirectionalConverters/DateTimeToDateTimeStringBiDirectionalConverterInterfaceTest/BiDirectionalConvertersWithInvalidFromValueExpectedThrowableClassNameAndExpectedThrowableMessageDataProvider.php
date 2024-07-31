<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverterInterfaceTest;

use CodeKandis\Converters\BiDirectionalConverters\DateTimeToDateTimeStringBiDirectionalConverter;
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
class BiDirectionalConvertersWithInvalidFromValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			1  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			2  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			3  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			4  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			5  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			6  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			7  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			8  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			9  => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			10 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			11 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			12 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			13 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter( $format = Values::DATETIME_FORMAT, Values::NULL ),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			14 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			15 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			16 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			17 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			18 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			19 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			],
			20 => [
				'biDirectionalConverter'     => new DateTimeToDateTimeStringBiDirectionalConverter(
					$format = Values::DATETIME_FORMAT,
					Values::createDateTimeZoneObject()
				),
				'invalidFromValue'           => $invalidFromValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidFromValue,
					sprintf( Values::TEMPLATE_DATETIME_STRING, $format )
				)
			]
		];
	}
}
