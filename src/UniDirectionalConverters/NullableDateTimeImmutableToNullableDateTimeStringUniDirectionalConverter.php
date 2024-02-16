<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a `nullable DateTimeImmutable` into a `nullable DateTime string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeImmutableToNullableDateTimeStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME_IMMUTABLE );
		}

		return $value?->format( $this->format );
	}
}
