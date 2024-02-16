<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;

/**
 * Represents a uni-directional converter converting a nullable DateTimeImmutable into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeImmutableToNullableStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE );
		}

		return $value?->format( $this->format );
	}
}
