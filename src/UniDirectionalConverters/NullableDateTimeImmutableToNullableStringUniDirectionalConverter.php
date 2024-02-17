<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a nullable string into a nullable DateTimeImmutable.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeImmutableToNullableStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a nullable string into a nullable DateTimeImmutable value.
	 * @param ?DateTimeImmutable $value The nullable DateTimeImmutable value which has to be converted.
	 * @return ?string The converted nullable string value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if ( null !== $value && false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_DATE_TIME_IMMUTABLE );
		}

		return $value?->format( $this->format );
	}
}
