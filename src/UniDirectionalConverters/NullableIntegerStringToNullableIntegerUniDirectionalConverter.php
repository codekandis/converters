<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\ExpectedTypes;
use CodeKandis\Converters\ValidValues;
use CodeKandis\Converters\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use Override;
use function is_string;

/**
 * Represents a unidirectional converter converting a `nullable integer string` into a `nullable integer`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerStringToNullableIntegerUniDirectionalConverter extends AbstractConverter implements NullableIntegerStringToNullableIntegerUniDirectionalConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convert( mixed $value ): ?int
	{
		if ( null === $value )
		{
			return null;
		}

		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ExpectedTypes::NULLABLE_STRING );
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidValues::NULL_STRING, ValidValuesRegularExpressions::REGEX_INTEGER_STRING );
		}

		return (int) $value;
	}
}
