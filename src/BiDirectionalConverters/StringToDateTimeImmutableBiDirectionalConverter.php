<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;
use function is_string;

/**
 * Represents a bi-directional converter converting between `string` and `DateTimeImmutable`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToDateTimeImmutableBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements StringToDateTimeImmutableBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): DateTimeImmutable
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): string
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}
}
