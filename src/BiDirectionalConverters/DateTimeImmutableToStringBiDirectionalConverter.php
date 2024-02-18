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
 * Represents a bi-directional converter converting between `DateTimeImmutable` and `string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToStringBiDirectionalConverter extends AbstractDateTimeRelatedConverter implements DateTimeImmutableToStringBiDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		if ( false === $value instanceof DateTimeImmutable )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::DATETIME_IMMUTABLE );
		}

		return $value->format( $this->format );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): DateTimeImmutable
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		$convertedValue = DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );

		if ( false === $convertedValue )
		{
			throw $this->getInvalidValueException(
				$value,
				sprintf( ValidValues::TEMPLATE_DATETIME_STRING_TEMPLATE, $this->format )
			);
		}

		return $convertedValue;
	}
}
