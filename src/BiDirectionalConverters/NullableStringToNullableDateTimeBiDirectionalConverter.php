<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use DateTime;
use Override;
use function is_string;

/**
 * Represents a bidirectional converter converting between nullable string and nullable DateTime.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableDateTimeBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements BiDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a nullable string into a nullable DateTime value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?DateTime The converted nullable DateTime value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertTo( mixed $value ): ?DateTime
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}

	/**
	 * Converts from a nullable DateTime into a nullable string value.
	 * @param ?DateTime $value The nullable DateTime value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME );
		}

		return $value?->format( $this->format );
	}
}
