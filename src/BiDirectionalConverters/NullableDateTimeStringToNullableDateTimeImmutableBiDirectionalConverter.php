<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use DateTimeImmutable;
use Override;
use function is_string;
use function sprintf;

/**
 * Represents a bidirectional converter converting between `nullable DateTime string` and `nullable DateTimeImmutable`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeStringToNullableDateTimeImmutableBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?DateTimeImmutable
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		$convertedValue = DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );

		if ( false === $convertedValue )
		{
			throw $this->getInvalidValueException(
				$value,
				ValidValues::NULL_STRING,
				sprintf( ValidValues::TEMPLATE_DATETIME_STRING_TEMPLATE, $this->format )
			);
		}

		return $convertedValue;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?string
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
