<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use CodeKandis\Converters\Types\InvalidTypeException;
use CodeKandis\Converters\Types\InvalidValueException;
use CodeKandis\Converters\Types\TypeDeterminator;
use function sprintf;

/**
 * Represents the base class of any converter.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractConverter
{
	/**
	 * Represents the error message if the type of a value to convert is not valid.
	 * @var string
	 */
	protected const ERROR_INVALID_TYPE = 'The type of the value is not valid. `%s` expected, but `%s` given.';

	/**
	 * Represents the error message if the value to convert is not valid.
	 * @var string
	 */
	protected const ERROR_INVALID_VALUE = 'The value is not valid. `%s` expected, but `%s` given.';

	/**
	 * Gets the InvalidTypeException.
	 * @param mixed $value The given value.
	 * @param string $expectedType The expected type.
	 * @return InvalidTypeException The InvalidTypeException.
	 */
	protected function getInvalidTypeException( $value, string $expectedType ): InvalidTypeException
	{
		return new InvalidTypeException(
			sprintf(
				static::ERROR_INVALID_TYPE,
				$expectedType,
				( new TypeDeterminator( false ) )
					->determine( $value )
			)
		);
	}

	/**
	 * Gets the InvalidValueException.
	 * @param mixed $value The given value.
	 * @param string $expectedValue The expected value.
	 * @return InvalidValueException The InvalidValueException.
	 */
	protected function getInvalidValueException( $value, string $expectedValue ): InvalidValueException
	{
		return new InvalidValueException(
			sprintf(
				static::ERROR_INVALID_VALUE,
				$expectedValue,
				$value
			)
		);
	}
}
