<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\ValidTypes;
use DateTimeImmutable;
use Override;
use function is_string;

/**
 * Represents a unidirectional converter converting a nullable string into a nullable DateTimeImmutable.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableDateTimeImmutableUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements UniDirectionalDateTimeRelatedConverterInterface
{
	/**
	 * Converts from a nullable string into a nullable DateTimeImmutable value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?DateTimeImmutable The converted nullable DateTimeImmutable value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): ?DateTimeImmutable
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
