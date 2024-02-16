<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;
use function is_string;

/**
 * Represents a bi-directional converter converting between `nullable string` and `nullable DateTimeImmutable`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableDateTimeImmutableBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableStringToNullableDateTimeImmutableBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): ?DateTimeImmutable
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE );
		}

		return $value?->format( $this->format );
	}
}
