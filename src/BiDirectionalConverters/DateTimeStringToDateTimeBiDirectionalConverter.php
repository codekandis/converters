<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\DateTimeStringToDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\DateTimeToDateTimeStringUniDirectionalConverter;
use DateTime;
use DateTimeZone;
use Override;

/**
 * Represents a bidirectional converter converting a `DateTime` string value into its corresponding `DateTime` value depending on a given format - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class DateTimeStringToDateTimeBiDirectionalConverter extends AbstractDateTimeRelatedBiDirectionalConverter implements DateTimeStringToDateTimeBiDirectionalConverterInterface
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
			new DateTimeStringToDateTimeUniDirectionalConverter( $format, $timeZone ),
			new DateTimeToDateTimeStringUniDirectionalConverter( $format, $timeZone )
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): DateTime
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		return parent::convertFrom( $value );
	}
}
