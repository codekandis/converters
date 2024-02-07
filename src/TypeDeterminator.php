<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use Override;
use function get_class;
use function gettype;
use function is_object;

/**
 * Represents a type determinator.
 * @package codekandis/tiphy
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminator implements TypeDeterminatorInterface
{
	/**
	 * Stores if the determined types has to be strict native.
	 * @var bool
	 */
	private bool $strict;

	/**
	 * Constructor method.
	 * @param bool $strict True if the determined types has to be strict native, otherwise false.
	 */
	public function __construct( bool $strict )
	{
		$this->strict = $strict;
	}

	/**
	 * Determines the strict native type of a value.
	 * @param mixed $value The value to determine its type.
	 * @return string The determined type.
	 */
	private function determineStrict( mixed $value ): string
	{
		return gettype( $value );
	}

	/**
	 * Determines the loose type of a value.
	 * @param mixed $value The value to determine its type.
	 * @return string The determined type.
	 */
	private function determineLoose( mixed $value ): string
	{
		if ( true === is_object( $value ) )
		{
			return get_class( $value );
		}

		$determinedType = gettype( $value );
		switch ( $determinedType )
		{
			case NativeTypes::UNKNOWN_TYPE:
			{
				$determinedType = ValidTypes::UNKNOWN;
				break;
			}
			case NativeTypes::NULL:
			{
				$determinedType = ValidTypes::NULL;
				break;
			}
			case NativeTypes::CLOSED_RESOURCE:
			{
				$determinedType = ValidTypes::UNKNOWN;
				break;
			}
			case NativeTypes::FLOAT:
			{
				$determinedType = ValidTypes::FLOAT;
				break;
			}
			case NativeTypes::BOOLEAN:
			{
				$determinedType = ValidTypes::BOOLEAN;
				break;
			}
			case NativeTypes::INTEGER:
			{
				$determinedType = ValidTypes::INTEGER;
				break;
			}
		}

		return $determinedType;
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function determine( mixed $value ): string
	{
		return true === $this->strict
			? $this->determineStrict( $value )
			: $this->determineLoose( $value );
	}
}
