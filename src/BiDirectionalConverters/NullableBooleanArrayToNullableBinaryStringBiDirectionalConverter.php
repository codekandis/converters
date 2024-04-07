<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable boolean array` and `nullable binary string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBooleanArrayToNullableBinaryStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBooleanArrayToNullableBinaryStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBooleanArrayToNullableBinaryStringUniDirectionalConverter(),
			new NullableBinaryStringToNullableBooleanArrayUniDirectionalConverter()
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
	public function convertFrom( mixed $value ): ?array
	{
		return parent::convertFrom( $value );
	}
}
