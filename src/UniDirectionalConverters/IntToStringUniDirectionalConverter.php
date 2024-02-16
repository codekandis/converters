<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use Override;
use function is_int;

/**
 * Represents a uni-directional converter converting an integer into a string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToStringUniDirectionalConverter extends AbstractConverter implements IntToStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): string
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
		}

		return (string) $value;
	}
}
