<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableIntegerStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableIntegerToNullableIntegerStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a nullable integer value into its corresponding nullable integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_INTEGER_STRING`] - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerToNullableIntegerStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableIntegerToNullableIntegerStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableIntegerToNullableIntegerStringUniDirectionalConverter(),
			new NullableIntegerStringToNullableIntegerUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?int
	{
		return parent::convertFrom( $value );
	}
}
