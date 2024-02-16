<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractDateTimeRelatedConverter;
use CodeKandis\Converters\ExpectedTypes;
use DateTime;
use Override;
use function is_string;

/**
 * Represents a uni-directional converter converting a string into a DateTime.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringToDateTimeUniDirectionalConverter extends AbstractDateTimeRelatedConverter implements StringToDateTimeUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): DateTime
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::STRING );
		}

		return DateTime::createFromFormat( $this->format, $value, $this->timeZone );
	}
}
