<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTimeImmutable;
use Override;
use function is_string;

/**
 * Represents a uni-directional converter converting a string into a DateTimeImmutable.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToDateTimeImmutableUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements StringToDateTimeImmutableUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): DateTimeImmutable
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		return DateTimeImmutable::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
