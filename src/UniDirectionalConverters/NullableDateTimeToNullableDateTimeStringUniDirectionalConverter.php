<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTime;
use Override;

/**
 * Represents a unidirectional converter converting a nullable `DateTime` value into its corresponding nullable `DateTime` string value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeToNullableDateTimeStringUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeToNullableDateTimeStringUniDirectionalConverterInterface
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

		if ( false === $value instanceof DateTime )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_DATETIME );
		}

		return $value?->format( $this->format );
	}
}
