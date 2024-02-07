<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\InvalidTypeExceptionInterface;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use CodeKandis\Converters\ValidTypes;
use DateTime;
use DateTimeZone;
use Override;
use function is_string;

/**
 * Represents a unidirectional converter converting a string into a DateTime.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToDateTimeUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct(
		private readonly string        $format,
		private readonly ?DateTimeZone $timeZone = null
	)
	{
	}

	/**
	 * Converts from a string into a DateTime value.
	 * @param string $value The string value which has to be converted.
	 * @return DateTime The converted DateTime value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): DateTime
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
