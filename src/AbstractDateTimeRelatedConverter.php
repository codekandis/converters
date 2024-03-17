<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use DateTimeZone;

/**
 * Represents the base class of any `DateTime` related converter.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractDateTimeRelatedConverter extends AbstractConverter implements DateTimeRelatedConverterInterface
{
	/**
	 * Stores the format of the timestamp string.
	 * @var string
	 */
	protected readonly string $format;

	/**
	 * Stores the time zone of the timestamp.
	 * @var ?DateTimeZone
	 */
	protected readonly ?DateTimeZone $timeZone;

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
	 * @inheritDoc
	 */
	public function getFormat(): string
	{
		return $this->format;
	}

	/**
	 * @inheritDoc
	 */
	public function getTimeZone(): ?DateTimeZone
	{
		return $this->timeZone;
	}
}
