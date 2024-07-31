<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\BiDirectionalConverters;

use CodeKandis\Converters\UniDirectionalConverters\UniDirectionalConverterInterface;

/**
 * Represents the trait of any bidirectional converter.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
trait AbstractBiDirectionalConverterTrait
{
	/**
	 * Stores the unidirectional converter used to convert into a value.
	 */
	private readonly UniDirectionalConverterInterface $converterTo;

	/**
	 * Stores the unidirectional converter used to convert from a value.
	 */
	private readonly UniDirectionalConverterInterface $converterFrom;

	/**
	 * @inheritDoc
	 */
	public function convertTo( mixed $value ): mixed
	{
		return $this->converterTo->convert( $value );
	}

	/**
	 * @inheritDoc
	 */
	public function convertFrom( mixed $value ): mixed
	{
		return $this->converterFrom->convert( $value );
	}
}
