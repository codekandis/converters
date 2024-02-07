<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use DateTimeImmutable;
use DateTimeZone;
use Override;
use function is_string;

/**
 * Represents a bidirectional converter converting between string and DateTimeImmutable.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToDateTimeImmutableBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct(
		private readonly string        $format,
		private readonly ?DateTimeZone $timeZone = null
	)
	{
	}

	/**
	 * Converts from a string into a DateTimeImmutable value.
	 * @param string $value The string value which has to be converted.
	 * @return DateTimeImmutable The converted DateTimeImmutable value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): DateTimeImmutable
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}

	/**
	 * Converts from a DateTimeImmutable into a string value.
	 * @param DateTimeImmutable $value The DateTimeImmutable value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::DATE_TIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}
}
