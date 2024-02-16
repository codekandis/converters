<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use function decbin;
use function is_int;

/**
 * Represents a uni-directional converter converting an integer into a binary string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntToBinaryStringUniDirectionalConverter extends AbstractConverter implements IntToBinaryStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): string
	{
		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::INTEGER );
		}

		return decbin( $value );
	}
}
