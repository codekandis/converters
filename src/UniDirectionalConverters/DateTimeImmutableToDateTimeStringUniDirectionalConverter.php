<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a `DateTimeImmutable` into a `DateTime string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeImmutableToDateTimeStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}
}
