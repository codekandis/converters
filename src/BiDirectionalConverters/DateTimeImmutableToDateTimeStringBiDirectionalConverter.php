<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\DateTimeImmutableToDateTimeStringUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeImmutableUniDirectionalConverter;
use DateTimeImmutable;
use DateTimeZone;
use Override;

/**
 * Represents a bidirectional converter converting a `DateTimeImmutable` value into its corresponding `DateTime` string value depending on a given format - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeImmutableToDateTimeStringBiDirectionalConverter extends AbstractDateTimeRelatedBiDirectionalConverter implements DateTimeImmutableToDateTimeStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct( string $format, ?DateTimeZone $timeZone = null )
	{
		parent::__construct(
			$format,
			$timeZone,
			new DateTimeImmutableToDateTimeStringUniDirectionalConverter( $format, $timeZone ),
			new DateTimeStringToDateTimeImmutableUniDirectionalConverter( $format, $timeZone )
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): DateTimeImmutable
	{
		return parent::convertFrom( $value );
	}
}
