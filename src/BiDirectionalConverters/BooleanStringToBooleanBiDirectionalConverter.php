<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\BooleanStringToBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\BooleanToBooleanStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting a boolean string value matching the regular expression [`ValidValuesRegularExpressions::REGEX_BOOLEAN_STRING`] into its corresponding boolean value equal to `false` or `true` - and vice versa.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class BooleanStringToBooleanBiDirectionalConverter extends AbstractBiDirectionalConverter implements BooleanStringToBooleanBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new BooleanStringToBooleanUniDirectionalConverter(),
			new BooleanToBooleanStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): bool
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): string
	{
		return parent::convertFrom( $value );
	}
}
