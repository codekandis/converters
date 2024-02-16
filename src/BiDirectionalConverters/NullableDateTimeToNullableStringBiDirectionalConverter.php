<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTime;
use function is_string;

/**
 * Represents a bi-directional converter converting between `nullable DateTime` and `nullable string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeToNullableStringBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeToNullableStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME );
		}

		return $value?->format( $this->format );
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): ?DateTime
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
}
