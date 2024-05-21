<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\Fixtures;

use DateTime;
use DateTimeImmutable;
use DateTimeZone;

/**
 * Represents an enumeration of values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents a `null` value.
	 */
	public const null NULL = null;

	/**
	 * Represents a `null string` value.
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents a `boolean false` value.
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` value.
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents a set of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_SET = [
		self::BOOLEAN_FALSE,
		self::BOOLEAN_TRUE
	];

	/**
	 * Represents a `boolean integer false` value.
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer true` value.
	 */
	public const int BOOLEAN_INTEGER_TRUE = 1;

	/**
	 * Represents a set of `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_SET = [
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE
	];

	/**
	 * Represents a `boolean integer string false` value.
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string true` value.
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents the regular expression of a `boolean integer string` value.
	 */
	public const string REGEX_BOOLEAN_INTEGER_STRING = '~^[01]$~';

	/**
	 * Represents a `boolean string false` value.
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string true` value.
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents the regular expression of a `boolean string` value.
	 */
	public const string REGEX_BOOLEAN_STRING = '~^false|true$~';

	/**
	 * Represents a set of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_ARRAY = [
		true,
		false,
		true,
		false,
		true,
		false
	];

	/**
	 * Represents a `binary string` value.
	 */
	public const string BINARY_STRING = '101010';

	/**
	 * Represents the regular expression of a `binary string` value.
	 */
	public const string REGEX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents an `integer` value.
	 */
	public const int INTEGER = 42;

	/**
	 * Represents an `integer string` value.
	 */
	public const string INTEGER_STRING = '42';

	/**
	 * Represents the regular expression of a `boolean` value.
	 */
	public const string REGEX_INTEGER_STRING = '~^\\-?\d+$~';

	/**
	 * Represents a `float` value.
	 */
	public const float FLOAT = 42.24;

	/**
	 * Represents a `float string` value.
	 */
	public const string FLOAT_STRING = '42.24';

	/**
	 * Represents the regular expression of a `float` value.
	 */
	public const string REGEX_FLOAT_STRING = '~^\\-?\d+(?:\\.\d+)?$~';

	/**
	 * Represents a `DateTime string` value.
	 */
	public const string DATETIME_STRING = '1990-05-14 12:24:49.123456';

	/**
	 * Represents a `DateTime` format.
	 */
	public const string DATETIME_FORMAT = 'Y-m-d H:i:s.u';

	/**
	 * Represents a UTC `DateTimeZone`.
	 */
	public const string DATETIMEZONE_UTC = 'UTC';

	/**
	 * Represents the template of a `DateTime string` value.
	 */
	public const string TEMPLATE_DATETIME_STRING = 'string<datetime<%s>>';

	/**
	 * Represents a nonexistent class name.
	 */
	public const string NONEXISTENT_CLASS_NAME = 'nonExistentClassName';

	/**
	 * Represents a set of `class constants` values.
	 * @var mixed[]
	 */
	public const array CLASS_CONSTANTS_ARRAY = [
		'NULL'                         => Values::NULL,
		'NULL_STRING'                  => Values::NULL_STRING,
		'BOOLEAN_FALSE'                => Values::BOOLEAN_FALSE,
		'BOOLEAN_TRUE'                 => Values::BOOLEAN_TRUE,
		'BOOLEAN_SET'                  => Values::BOOLEAN_SET,
		'BOOLEAN_INTEGER_FALSE'        => Values::BOOLEAN_INTEGER_FALSE,
		'BOOLEAN_INTEGER_TRUE'         => Values::BOOLEAN_INTEGER_TRUE,
		'BOOLEAN_INTEGER_SET'          => Values::BOOLEAN_INTEGER_SET,
		'BOOLEAN_STRING_FALSE'         => Values::BOOLEAN_STRING_FALSE,
		'BOOLEAN_STRING_TRUE'          => Values::BOOLEAN_STRING_TRUE,
		'BOOLEAN_INTEGER_STRING_FALSE' => Values::BOOLEAN_INTEGER_STRING_FALSE,
		'BOOLEAN_INTEGER_STRING_TRUE'  => Values::BOOLEAN_INTEGER_STRING_TRUE,
		'INTEGER'                      => Values::INTEGER,
		'INTEGER_STRING'               => Values::INTEGER_STRING,
		'FLOAT'                        => Values::FLOAT,
		'FLOAT_STRING'                 => Values::FLOAT_STRING
	];

	/**
	 * Creates a `class` object.
	 * @return object The created `class` object.
	 */
	public static function createClassObject(): object
	{
		return new class()
		{
			public const null   NULL                         = Values::NULL;

			public const string NULL_STRING                  = Values::NULL_STRING;

			public const bool   BOOLEAN_FALSE                = Values::BOOLEAN_FALSE;

			public const bool   BOOLEAN_TRUE                 = Values::BOOLEAN_TRUE;

			public const array  BOOLEAN_SET                  = Values::BOOLEAN_SET;

			public const int    BOOLEAN_INTEGER_FALSE        = Values::BOOLEAN_INTEGER_FALSE;

			public const int    BOOLEAN_INTEGER_TRUE         = Values::BOOLEAN_INTEGER_TRUE;

			public const array  BOOLEAN_INTEGER_SET          = Values::BOOLEAN_INTEGER_SET;

			public const string BOOLEAN_STRING_FALSE         = Values::BOOLEAN_STRING_FALSE;

			public const string BOOLEAN_STRING_TRUE          = Values::BOOLEAN_STRING_TRUE;

			public const string BOOLEAN_INTEGER_STRING_FALSE = Values::BOOLEAN_INTEGER_STRING_FALSE;

			public const string BOOLEAN_INTEGER_STRING_TRUE  = Values::BOOLEAN_INTEGER_STRING_TRUE;

			public const int    INTEGER                      = Values::INTEGER;

			public const string INTEGER_STRING               = Values::INTEGER_STRING;

			public const float  FLOAT                        = Values::FLOAT;

			public const string FLOAT_STRING                 = Values::FLOAT_STRING;
		};
	}

	/**
	 * Creates a `DateTimeImmutable` object.
	 * @return DateTimeImmutable The created `DateTimeImmutable` object.
	 */
	public static function createDateTimeImmutableObject(): DateTimeImmutable
	{
		return new DateTimeImmutable( Values::DATETIME_STRING );
	}

	/**
	 * Creates a `DateTime` object.
	 * @return DateTime The created `DateTime` object.
	 */
	public static function createDateTimeObject(): DateTime
	{
		return new DateTime( Values::DATETIME_STRING );
	}

	/**
	 * Creates a `DateTimeZone` object.
	 * @return DateTimeZone The created `DateTimeZone` object.
	 */
	public static function createDateTimeZoneObject(): DateTimeZone
	{
		return new DateTimeZone( Values::DATETIMEZONE_UTC );
	}
}
