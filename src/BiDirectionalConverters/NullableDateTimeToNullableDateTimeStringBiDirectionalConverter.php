<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeStringToNullableDateTimeUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableDateTimeToNullableDateTimeStringUniDirectionalConverter;
use DateTime;
use DateTimeZone;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable DateTime` and `nullable DateTime string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableDateTimeToNullableDateTimeStringBiDirectionalConverter extends AbstractDateTimeRelatedBiDirectionalConverter implements NullableDateTimeToNullableDateTimeStringBiDirectionalConverterInterface
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
			new NullableDateTimeToNullableDateTimeStringUniDirectionalConverter( $format, $timeZone ),
			new NullableDateTimeStringToNullableDateTimeUniDirectionalConverter( $format, $timeZone )
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?DateTime
	{
		return parent::convertFrom( $value );
	}
}
