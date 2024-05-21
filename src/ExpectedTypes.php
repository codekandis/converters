<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents an enumeration of expected types.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ExpectedTypes
{
	/**
	 * Represents a `NULL` type.

	 */
	public const string NULL = 'null';

	/**
	 * Represents a `boolean` type.

	 */
	public const string BOOLEAN = 'bool';

	/**
	 * Represents a `nullable boolean` type.

	 */
	public const string NULLABLE_BOOLEAN = '?bool';

	/**
	 * Represents a `boolean array` type.

	 */
	public const string BOOLEAN_ARRAY = 'bool[]';

	/**
	 * Represents a `nullable boolean array` type.

	 */
	public const string NULLABLE_BOOLEAN_ARRAY = '?bool[]';

	/**
	 * Represents a `boolean` type.

	 */
	public const string INTEGER = 'int';

	/**
	 * Represents a `nullable boolean` type.

	 */
	public const string NULLABLE_INTEGER = '?int';

	/**
	 * Represents an `integer array` type.

	 */
	public const string INTEGER_ARRAY = 'int[]';

	/**
	 * Represents an `nullable integer array` type.

	 */
	public const string NULLABLE_INTEGER_ARRAY = '?int[]';

	/**
	 * Represents a `float` type.

	 */
	public const string FLOAT = 'float';

	/**
	 * Represents a `nullable float` type.

	 */
	public const string NULLABLE_FLOAT = '?float';

	/**
	 * Represents a `string` type.

	 */
	public const string STRING = 'string';

	/**
	 * Represents a `nullable string` type.

	 */
	public const string NULLABLE_STRING = '?string';

	/**
	 * Represents a `string array` type.

	 */
	public const string STRING_ARRAY = 'string[]';

	/**
	 * Represents a `nullable string array` type.

	 */
	public const string NULLABLE_STRING_ARRAY = '?string[]';

	/**
	 * Represents a `DateTimeImmutable` type.

	 */
	public const string DATETIME_IMMUTABLE = 'DateTimeImmutable';

	/**
	 * Represents a `nullable DateTimeImmutable` type.

	 */
	public const string NULLABLE_DATETIME_IMMUTABLE = '?DateTimeImmutable';

	/**
	 * Represents a `DateTime` type.

	 */
	public const string DATETIME = 'DateTime';

	/**
	 * Represents a `nullable DateTime` type.

	 */
	public const string NULLABLE_DATETIME = '?DateTime';
}
