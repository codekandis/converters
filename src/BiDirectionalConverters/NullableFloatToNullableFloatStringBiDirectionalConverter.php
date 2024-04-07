<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableFloatStringToNullableFloatUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableFloatToNullableFloatStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable float` and `nullable float string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableFloatToNullableFloatStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableFloatToNullableFloatStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableFloatToNullableFloatStringUniDirectionalConverter(),
			new NullableFloatStringToNullableFloatUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): ?float
	{
		return parent::convertFrom( $value );
	}
}
