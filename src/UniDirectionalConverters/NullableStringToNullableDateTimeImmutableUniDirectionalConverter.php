<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use DateTimeImmutable;
use DateTimeZone;
use function is_string;

/**
 * Represents a uni-directional converter converting a nullable string into a nullable DateTimeImmutable.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableStringToNullableDateTimeImmutableUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Stores the format of the timestamp string.
	 * @var string
	 */
	private string $format;

	/**
	 * Stores the time zone of the timestamp.
	 * @var ?DateTimeZone
	 */
	private ?DateTimeZone $timeZone;

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
	 * Converts from a nullable string into a nullable DateTimeImmutable value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?DateTimeImmutable The converted nullable DateTimeImmutable value.
	 */
	public function convert( $value )
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
