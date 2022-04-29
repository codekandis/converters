<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\AbstractConverter;
use CodeKandis\Converters\Types\ValidTypes;
use CodeKandis\Converters\UniDirectionalConverterInterface;
use ReflectionClass;
use ReflectionException;
use function in_array;
use function is_string;
use function sprintf;

/**
 * Represents a uni-directional converter converting enums into arrays of values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumToArrayUniDirectionalConverter extends AbstractConverter implements UniDirectionalConverterInterface
{
	/**
	 * Represents the error message if an enum class does not exist.
	 * @var string
	 */
	protected const ERROR_ENUM_CLASS_NOT_FOUND = 'The enum class `%s` does not exist.';

	/**
	 * {@inheritDoc}
	 * @throws EnumClassNotFoundException The enum class does not exist.
	 */
	public function convert( $value )
	{
		if ( false === is_string( $value ) )
		{
			throw $this->getInvalidTypeException( $value, ValidTypes::STRING );
		}

		try
		{
			$reflectedClass = new ReflectionClass( $value );
		}
		catch ( ReflectionException $exception )
		{
			throw new EnumClassNotFoundException(
				sprintf(
					self::ERROR_ENUM_CLASS_NOT_FOUND,
					$value
				)
			);
		}

		$convertedValue = [];
		foreach ( $reflectedClass->getConstants() as $constantValue )
		{
			if ( false === in_array( $constantValue, $convertedValue, true ) )
			{
				$convertedValue[] = $constantValue;
			}
		}

		return $convertedValue;
	}
}
