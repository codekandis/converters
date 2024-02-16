<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\DataProviders\UnitTests\UniDirectionalConverters\StringToDateTimeImmutableUniDirectionalConverterInterfaceTest;

use CodeKandis\Converters\Tests\Fixtures\Values;
use CodeKandis\Converters\UniDirectionalConverters\StringToDateTimeImmutableUniDirectionalConverter;
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
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_FALSE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, sprintf(
						Values::TEMPLATE_DATETIME_STRING, $format
					)
				)
			],
			1 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BOOLEAN_STRING_TRUE,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, sprintf(
						Values::TEMPLATE_DATETIME_STRING, $format
					)
				)
			],
			2 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::BINARY_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, sprintf(
						Values::TEMPLATE_DATETIME_STRING, $format
					)
				)
			],
			3 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::INTEGER_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, sprintf(
						Values::TEMPLATE_DATETIME_STRING, $format
					)
				)
			],
			4 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::FLOAT_STRING,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, sprintf(
						Values::TEMPLATE_DATETIME_STRING, $format
					)
				)
			],
			5 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::DATETIME_FORMAT,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, sprintf(
						Values::TEMPLATE_DATETIME_STRING, $format
					)
				)
			],
			6 => [
				'uniDirectionalConverter'    => new StringToDateTimeImmutableUniDirectionalConverter( $format = Values::DATETIME_FORMAT ),
				'invalidValue'               => $invalidValue = Values::DATETIMEZONE_UTC,
				'expectedThrowableClassName' => InvalidValueException::class,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $invalidValue, sprintf(
						Values::TEMPLATE_DATETIME_STRING, $format
					)
				)
			]
		];
	}
}