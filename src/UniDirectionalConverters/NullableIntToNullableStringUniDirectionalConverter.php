<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use function is_int;

/**
 * Represents a uni-directional converter converting a nullable integer into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntToNullableStringUniDirectionalConverter extends AbstractConverter implements NullableIntToNullableStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): ?string
	{
		if ( null !== $value && false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_INTEGER );
		}

		if ( null === $value )
		{
			return null;
		}

		return (string) $value;
	}
}
