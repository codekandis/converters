<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBinaryStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableIntegerToNullableBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable integer` and `nullable binary string`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableIntegerToNullableBinaryStringBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableIntegerToNullableBinaryStringBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableIntegerToNullableBinaryStringUniDirectionalConverter(),
			new NullableBinaryStringToNullableIntegerUniDirectionalConverter()
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
