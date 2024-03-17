<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use DateTimeZone;
use Override;

/**
 * Represents the base class of any `DateTime` related converter.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractDateTimeRelatedConverter extends AbstractConverter implements DateTimeRelatedConverterInterface
{
	/**
	 * Constructor method.
	 * @param string $format The format of the timestamp string.
	 * @param ?DateTimeZone $timeZone The time zone of the timestamp.
	 */
	public function __construct(
		protected readonly string        $format,
		protected readonly ?DateTimeZone $timeZone = null
	)
	{
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function getFormat(): string
	{
		return $this->format;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function getTimeZone(): ?DateTimeZone
	{
		return $this->timeZone;
	}
}
