<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;
use function is_string;

/**
 * Represents a bi-directional converter converting between `nullable DateTimeImmutable` and `nullable string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableStringBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeImmutableToNullableStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE );
		}

		return $value?->format( $this->format );
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): ?DateTimeImmutable
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
}
