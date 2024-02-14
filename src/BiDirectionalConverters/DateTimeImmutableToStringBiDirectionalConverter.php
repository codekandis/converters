<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTimeImmutable;
use Override;
use function is_string;

/**
 * Represents a bidirectional converter converting between DateTimeImmutable and string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToStringBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a DateTimeImmutable into a string value.
	 * @param DateTimeImmutable $value The DateTimeImmutable value which has to be converted.
	 * @return string The converted string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}

	/**
	 * Converts from a string into a DateTimeImmutable value.
	 * @param string $value The string value which has to be converted.
	 * @return DateTimeImmutable The converted DateTimeImmutable value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): DateTimeImmutable
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
