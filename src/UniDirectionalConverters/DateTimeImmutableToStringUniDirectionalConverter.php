<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;

/**
 * Represents a unidirectional converter converting a DateTimeImmutable into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeImmutableToStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): string
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}
}
