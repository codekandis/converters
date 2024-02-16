<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\Fixtures;

use function fclose;

/**
 * Represents an enumeration of typed values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypedValues
{
	/**
	 * Represents a `null` typed value.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents an `array` typed value.
	 * @var array
	 */
	public const array ARRAY = [];

	/**
	 * Represents a `nonboolean array` typed value.
	 * @var array
	 */
	public const array NONBOOLEAN_ARRAY = [
		self::INTEGER,
		self::FLOAT
	];

	/**
	 * Represents a `boolean` typed value.
	 * @var bool
	 */
	public const bool BOOLEAN = false;

	/**
	 * Represents an `integer` typed value.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents a `float` typed value.
	 * @var float
	 */
	public const float FLOAT = 42.42;

	/**
	 * Represents a `string` typed value.
	 * @var string
	 */
	public const string STRING = 'foobar';

	/**
	 * Creates a `resource` typed value.
	 * @return resource The created `resource` typed value.
	 */
	public static function createResource()
	{
		return fopen( 'php://memory', 'r' );
	}

	/**
	 * Creates a `closed resource` typed value.
	 * @return resource The created `closed resource` typed value.
	 */
	public static function createClosedResource()
	{
		$resource = static::createResource();
		fclose( $resource );

		return $resource;
	}

	/**
	 * Creates an `object` typed value.
	 * @return object The created `object` typed value.
	 */
	public static function createObject(): object
	{
		return new class()
		{
		};
	}
}
