<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use Override;
use function decbin;
use function is_int;

/**
 * Represents a unidirectional converter converting a nullable integer value into its corresponding nullable binary string value matching the regular expression `ValidValuesRegularExpressions::REGEX_BINARY_STRING`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerToNullableBinaryStringUniDirectionalConverter extends AbstractConverter implements NullableIntegerToNullableBinaryStringUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?string
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_int( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_INTEGER );
		}

		return decbin( $value );
	}
}
