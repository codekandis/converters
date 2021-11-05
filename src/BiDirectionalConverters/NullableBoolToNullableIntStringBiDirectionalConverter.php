<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\BiDirectionalConverterInterface;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\Types\ValidValuesRegularExpressions;
use CodeKandis\RegularExpressions\RegularExpression;
use function is_bool;
use function is_string;

/**
 * Represents a bi-directional converter converting between nullable bool and nullable string.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBoolToNullableIntStringBiDirectionalConverter extends AbstractConverter implements BiDirectionalConverterInterface
{
	/**
	 * Converts from a nullable bool into a nullable string value.
	 * @param ?bool $value The nullable bool value which has to be converted.
	 * @return ?string The converted nullable string value.
	 */
	public function convertTo( $value )
	{
		if ( null !== $value && false === is_bool( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_BOOL );
		}

		if ( null === $value )
		{
			return null;
		}

		return false === $value
			? '0'
			: '1';
	}

	/**
	 * Converts from a nullable string into a nullable bool value.
	 * @param ?string $value The nullable string value which has to be converted.
	 * @return ?bool The converted nullable bool value.
	 */
	public function convertFrom( $value )
	{
		if ( null !== $value && false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::NULLABLE_STRING );
		}

		if ( null === $value )
		{
			return null;
		}

		$regularExpression = new RegularExpression( ValidValuesRegularExpressions::REGEX_BOOL_INT_STRING );
		if ( null === $regularExpression->match( $value, false ) )
		{
			throw $this->getInvalidValueException( $value, ValidTypes::NULL . ', ' . ValidValuesRegularExpressions::REGEX_BOOL_INT_STRING );
		}

		return '1' === $value;
	}
}
