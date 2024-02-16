<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use DateTimeImmutable;
use function is_string;
use function sprintf;

/**
 * Represents a bidirectional converter converting between `string` and `DateTimeImmutable`.
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
