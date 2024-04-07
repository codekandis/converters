<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\FloatStringToFloatUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\FloatToFloatStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `float string` and `float`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class FloatStringToFloatBiDirectionalConverter extends AbstractBiDirectionalConverter implements FloatStringToFloatBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new FloatStringToFloatUniDirectionalConverter(),
			new FloatToFloatStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): float
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
