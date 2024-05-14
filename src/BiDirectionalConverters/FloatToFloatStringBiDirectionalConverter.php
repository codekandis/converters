<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\FloatStringToFloatUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\FloatToFloatStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a float value into its corresponding float string value matching the regular expression `ValidValuesRegularExpressions::REGEX_FLOAT_STRING` - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatToFloatStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements FloatToFloatStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new FloatToFloatStringUniDirectionalConverter(),
			new FloatStringToFloatUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): string
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): float
	{
		return parent::convertFrom( $value );
	}
}
