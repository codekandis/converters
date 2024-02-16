<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use function is_float;

/**
 * Represents a uni-directional converter converting a nullable float into a nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatToNullableStringUniDirectionalConverter extends AbstractConverter implements NullableFloatToNullableStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	public function convert( mixed $value ): ?string
	{
		if ( null !== $value && false === is_float( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_FLOAT );
		}

		if ( null === $value )
		{
			return null;
		}

		return (string) $value;
	}
}
