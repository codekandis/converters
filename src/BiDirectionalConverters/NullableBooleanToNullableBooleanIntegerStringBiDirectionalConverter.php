<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanIntegerStringToNullableBooleanUniDirectionalConverter;
use CodeKandis\Converters\UniDirectionalConverters\NullableBooleanToNullableBooleanIntegerStringUniDirectionalConverter;
use Override;

/**
 * Represents a bidirectional converter converting between `nullable boolean` and `nullable boolean integer string`.
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
