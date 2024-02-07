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
 * Represents a unidirectional converter converting a nullable string into a nullable DateTime.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableDateTimeUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Stores the format of the timestamp string.
	 * @var string
	 */
	private readonly string $format;

	/**
	 * Stores the time zone of the timestamp.
	 * @var ?DateTimeZone
	 */
	private readonly ?DateTimeZone $timeZone;

	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct( string $format, ?DateTimeZone $timeZone = null )
	{
		$this->format   = $format;
		$this->timeZone = $timeZone;
	}

	/**
	 * Converts from a nullable string into a nullable DateTime value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?DateTime The converted nullable DateTime value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	#[Override]
	public function convert( mixed $value ): ?DateTime
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
