<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable binary string` and `nullable boolean array`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBinaryStringToNullableBooleanArrayBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBinaryStringToNullableBooleanArrayBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter(),
			new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?array
	{
		return parent::convertTo( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertFrom( mixed $value ): ?string
	{
		return parent::convertFrom( $value );
	}
}
