<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Validators\IsNullValidator;
use CodeKandis\Validators\IsStringValidator;
use DateTimeImmutable;
use Override;

/**
 * Represents a unidirectional converter converting a nullable `DateTime` string value into its corresponding nullable `DateTimeImmutable` value depending on a given format.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements NullableDateTimeStringToNullableDateTimeImmutableUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?DateTimeImmutable
	{
		if (
			true === ( new IsNullValidator() )
				->validate( $value )
		)
		{
			return null;
		}

		if (
			false === ( new IsStringValidator() )
				->validate( $value )
		)
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		$convertedValue = DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );

		if ( false === $convertedValue )
		{
			throw $this->getInvalidValueException(
				$value,
				ValidValues::NULL_STRING,
				ValidValues::createDateTimeString( $this->format )
			);
		}

		return $convertedValue;
	}
}
