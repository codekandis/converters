<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBinaryStringToNullableIntegerUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableIntegerToNullableBinaryStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable binary string` and `nullable integer`.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class NullableBinaryStringToNullableIntegerBiDirectionalConverter extends AbstractBiDirectionalConverter implements NullableBinaryStringToNullableIntegerBiDirectionalConverterInterface
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			new NullableBinaryStringToNullableIntegerUniDirectionalConverter(),
			new NullableIntegerToNullableBinaryStringUniDirectionalConverter()
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertTo( mixed $value ): ?int
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
