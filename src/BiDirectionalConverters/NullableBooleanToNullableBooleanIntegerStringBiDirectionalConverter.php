<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a nullable boolean value equal to `false` or `true` into its corresponding nullable boolean integer string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_INTEGER_STRING`] - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBooleanToNullableBooleanIntegerStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter(),
			new NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): ?bool
	{
		return parent::convertFrom( $value );
	}
}
