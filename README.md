# Airbrake.io

Assorted projects for [`Airbrake.io`](https://airbrake.io/).

## Exception Checklist

### Node.js

- [x] Class: Error
    - [x] Class: AssertionError
    - [x] Class: RangeError
    - [x] Class: ReferenceError
    - [x] Class: SyntaxError
    - [x] Class: TypeError
    - [ ] Class: System Error

- Node.js Error Codes
    - [ ] ERR_ARG_NOT_ITERABLE
    - [ ] ERR_ASSERTION
    - [ ] ERR_ASYNC_CALLBACK
    - [ ] ERR_ASYNC_TYPE
    - [ ] ERR_BUFFER_OUT_OF_BOUNDS
    - [ ] ERR_BUFFER_TOO_LARGE
    - [ ] ERR_CHILD_CLOSED_BEFORE_REPLY
    - [ ] ERR_CONSOLE_WRITABLE_STREAM
    - [ ] ERR_CPU_USAGE
    - [ ] ERR_CRYPTO_ECDH_INVALID_FORMAT
    - [ ] ERR_CRYPTO_ENGINE_UNKNOWN
    - [ ] ERR_CRYPTO_FIPS_FORCED
    - [ ] ERR_CRYPTO_FIPS_UNAVAILABLE
    - [ ] ERR_CRYPTO_HASH_DIGEST_NO_UTF16
    - [ ] ERR_CRYPTO_HASH_FINALIZED
    - [ ] ERR_CRYPTO_HASH_UPDATE_FAILED
    - [ ] ERR_CRYPTO_INVALID_DIGEST
    - [ ] ERR_CRYPTO_SIGN_KEY_REQUIRED
    - [ ] ERR_CRYPTO_TIMING_SAFE_EQUAL_LENGTH
    - [ ] ERR_DNS_SET_SERVERS_FAILED
    - [ ] ERR_ENCODING_INVALID_ENCODED_DATA
    - [ ] ERR_ENCODING_NOT_SUPPORTED
    - [ ] ERR_FALSY_VALUE_REJECTION
    - [ ] ERR_HTTP_HEADERS_SENT
    - [ ] ERR_HTTP_INVALID_CHAR
    - [ ] ERR_HTTP_INVALID_STATUS_CODE
    - [ ] ERR_HTTP_TRAILER_INVALID
    - [ ] ERR_HTTP2_CONNECT_AUTHORITY
    - [ ] ERR_HTTP2_CONNECT_PATH
    - [ ] ERR_HTTP2_CONNECT_SCHEME
    - [ ] ERR_HTTP2_FRAME_ERROR
    - [ ] ERR_HTTP2_HEADER_REQUIRED
    - [ ] ERR_HTTP2_HEADER_SINGLE_VALUE
    - [ ] ERR_HTTP2_HEADERS_AFTER_RESPOND
    - [ ] ERR_HTTP2_HEADERS_OBJECT
    - [ ] ERR_HTTP2_HEADERS_SENT
    - [ ] ERR_HTTP2_INFO_HEADERS_AFTER_RESPOND
    - [ ] ERR_HTTP2_INFO_STATUS_NOT_ALLOWED
    - [ ] ERR_HTTP2_INVALID_CONNECTION_HEADERS
    - [ ] ERR_HTTP2_INVALID_HEADER_VALUE
    - [ ] ERR_HTTP2_INVALID_INFO_STATUS
    - [ ] ERR_HTTP2_INVALID_PACKED_SETTINGS_LENGTH
    - [ ] ERR_HTTP2_INVALID_PSEUDOHEADER
    - [ ] ERR_HTTP2_INVALID_SESSION
    - [ ] ERR_HTTP2_INVALID_SETTING_VALUE
    - [ ] ERR_HTTP2_INVALID_STREAM
    - [ ] ERR_HTTP2_MAX_PENDING_SETTINGS_ACK
    - [ ] ERR_HTTP2_NO_SOCKET_MANIPULATION
    - [ ] ERR_HTTP2_OUT_OF_STREAMS
    - [ ] ERR_HTTP2_PAYLOAD_FORBIDDEN
    - [ ] ERR_HTTP2_PSEUDOHEADER_NOT_ALLOWED
    - [ ] ERR_HTTP2_PUSH_DISABLED
    - [ ] ERR_HTTP2_SEND_FILE
    - [ ] ERR_HTTP2_SOCKET_BOUND
    - [ ] ERR_HTTP2_STATUS_101
    - [ ] ERR_HTTP2_STATUS_INVALID
    - [ ] ERR_HTTP2_STREAM_CLOSED
    - [ ] ERR_HTTP2_STREAM_ERROR
    - [ ] ERR_HTTP2_STREAM_SELF_DEPENDENCY
    - [ ] ERR_HTTP2_UNSUPPORTED_PROTOCOL
    - [ ] ERR_INDEX_OUT_OF_RANGE
    - [ ] ERR_INSPECTOR_ALREADY_CONNECTED
    - [ ] ERR_INSPECTOR_CLOSED
    - [ ] ERR_INSPECTOR_NOT_AVAILABLE
    - [ ] ERR_INSPECTOR_NOT_CONNECTED
    - [ ] ERR_INVALID_ARG_TYPE
    - [ ] ERR_INVALID_ARG_VALUE
    - [ ] ERR_INVALID_ARRAY_LENGTH
    - [ ] ERR_INVALID_ASYNC_ID
    - [ ] ERR_INVALID_BUFFER_SIZE
    - [ ] ERR_INVALID_CALLBACK
    - [ ] ERR_INVALID_CHAR
    - [ ] ERR_INVALID_CURSOR_POS
    - [ ] ERR_INVALID_DOMAIN_NAME
    - [ ] ERR_INVALID_FD
    - [ ] ERR_INVALID_FD_TYPE
    - [ ] ERR_INVALID_FILE_URL_HOST
    - [ ] ERR_INVALID_FILE_URL_PATH
    - [ ] ERR_INVALID_HANDLE_TYPE
    - [ ] ERR_INVALID_HTTP_TOKEN
    - [ ] ERR_INVALID_IP_ADDRESS
    - [ ] ERR_INVALID_OPT_VALUE
    - [ ] ERR_INVALID_OPT_VALUE_ENCODING
    - [ ] ERR_INVALID_PERFORMANCE_MARK
    - [ ] ERR_INVALID_PROTOCOL
    - [ ] ERR_INVALID_REPL_EVAL_CONFIG
    - [ ] ERR_INVALID_SYNC_FORK_INPUT
    - [ ] ERR_INVALID_THIS
    - [ ] ERR_INVALID_TUPLE
    - [ ] ERR_INVALID_URI
    - [ ] ERR_INVALID_URL
    - [ ] ERR_INVALID_URL_SCHEME
    - [ ] ERR_IPC_CHANNEL_CLOSED
    - [ ] ERR_IPC_DISCONNECTED
    - [ ] ERR_IPC_ONE_PIPE
    - [ ] ERR_IPC_SYNC_FORK
    - [ ] ERR_METHOD_NOT_IMPLEMENTED
    - [ ] ERR_MISSING_ARGS
    - [ ] ERR_MISSING_DYNAMIC_INSTANTIATE_HOOK
    - [ ] ERR_MISSING_MODULE
    - [ ] ERR_MODULE_RESOLUTION_LEGACY
    - [ ] ERR_MULTIPLE_CALLBACK
    - [ ] ERR_NAPI_CONS_FUNCTION
    - [ ] ERR_NAPI_CONS_PROTOTYPE_OBJECT
    - [ ] ERR_NO_CRYPTO
    - [ ] ERR_NO_ICU
    - [ ] ERR_NO_LONGER_SUPPORTED
    - [ ] ERR_OUTOFMEMORY
    - [ ] ERR_OUT_OF_RANGE
    - [ ] ERR_PARSE_HISTORY_DATA
    - [ ] ERR_REQUIRE_ESM
    - [ ] ERR_SERVER_ALREADY_LISTEN
    - [ ] ERR_SOCKET_ALREADY_BOUND
    - [ ] ERR_SOCKET_BAD_BUFFER_SIZE
    - [ ] ERR_SOCKET_BAD_PORT
    - [ ] ERR_SOCKET_BAD_TYPE
    - [ ] ERR_SOCKET_BUFFER_SIZE
    - [ ] ERR_SOCKET_CANNOT_SEND
    - [ ] ERR_SOCKET_CLOSED
    - [ ] ERR_SOCKET_DGRAM_NOT_RUNNING
    - [ ] ERR_STDERR_CLOSE
    - [ ] ERR_STDOUT_CLOSE
    - [ ] ERR_STREAM_CANNOT_PIPE
    - [ ] ERR_STREAM_NULL_VALUES
    - [ ] ERR_STREAM_PUSH_AFTER_EOF
    - [ ] ERR_STREAM_READ_NOT_IMPLEMENTED
    - [ ] ERR_STREAM_UNSHIFT_AFTER_END_EVENT
    - [ ] ERR_STREAM_WRAP
    - [ ] ERR_STREAM_WRITE_AFTER_END
    - [ ] ERR_TLS_CERT_ALTNAME_INVALID
    - [ ] ERR_TLS_DH_PARAM_SIZE
    - [ ] ERR_TLS_HANDSHAKE_TIMEOUT
    - [ ] ERR_TLS_RENEGOTIATION_FAILED
    - [ ] ERR_TLS_REQUIRED_SERVER_NAME
    - [ ] ERR_TLS_SESSION_ATTACK
    - [ ] ERR_TRANSFORM_ALREADY_TRANSFORMING
    - [ ] ERR_TRANSFORM_WITH_LENGTH_0
    - [ ] ERR_UNESCAPED_CHARACTERS
    - [ ] ERR_UNHANDLED_ERROR
    - [ ] ERR_UNKNOWN_ENCODING
    - [ ] ERR_UNKNOWN_FILE_EXTENSION
    - [ ] ERR_UNKNOWN_MODULE_FORMAT
    - [ ] ERR_UNKNOWN_SIGNAL
    - [ ] ERR_UNKNOWN_STDIN_TYPE
    - [ ] ERR_UNKNOWN_STREAM_TYPE
    - [ ] ERR_V8BREAKITERATOR
    - [ ] ERR_VALID_PERFORMANCE_ENTRY_TYPE
    - [ ] ERR_VALUE_OUT_OF_RANGE
    - [ ] ERR_ZLIB_BINDING_CLOSED
    - [ ] ERR_ZLIB_INITIALIZATION_FAILED

### Python

- [x] BaseException
    - [x] Exception
        - [x] ArithmeticError
            - [x] FloatingPointError
            - [x] OverflowError
            - [x] ZeroDivisionError
        - [x] AssertionError
        - [x] AttributeError
        - [x] BufferError
        - [x] EOFError
        - [x] ImportError
            - [x] ModuleNotFoundError
        - [ ] LookupError
            - [ ] IndexError
            - [ ] KeyError
        - [ ] MemoryError
        - [ ] NameError
            - [ ] UnboundLocalError
        - [ ] OSError
            - [ ] BlockingIOError
            - [ ] ChildProcessError
            - [ ] ConnectionError
                - [ ] BrokenPipeError
                - [ ] ConnectionAbortedError
                - [ ] ConnectionRefusedError
                - [ ] ConnectionResetError
            - [ ] FileExistsError
            - [ ] FileNotFoundError
            - [ ] InterruptedError
            - [ ] IsADirectoryError
            - [ ] NotADirectoryError
            - [ ] PermissionError
            - [ ] ProcessLookupError
            - [ ] TimeoutError
        - [ ] ReferenceError
        - [ ] RuntimeError
            - [ ] NotImplementedError
            - [ ] RecursionError
        - [ ] StopIteration
        - [ ] StopAsyncIteration            
        - [x] SyntaxError
            - [ ] IndentationError
                - [ ] TabError
        - [ ] SystemError
        - [ ] TypeError
        - [] ValueError
            - [ ] UnicodeError
                - [ ] UnicodeDecodeError
                - [ ] UnicodeEncodeError
                - [ ] UnicodeTranslateError
        - [ ] Warning
            - [ ] BytesWarning
            - [ ] DeprecationWarning
            - [ ] FutureWarning
            - [ ] ImportWarning
            - [ ] PendingDeprecationWarning
            - [ ] ResourceWarning
            - [ ] RuntimeWarning
            - [ ] SyntaxWarning
            - [ ] UserWarning
            - [ ] UnicodeWarning
    - [ ] GeneratorExit
    - [ ] KeyboardInterrupt
    - [ ] SystemExit

### PHP

- [x] `Throwable`
  - [x] `Error`
    - [x] `ArithmeticError`
      - [x] `DivisionByZeroError`
    - [x] `AssertionError`
    - [x] `ParseError`
    - [x] `TypeError`
  - [x] `Exception`
    - [x] `ClosedGeneratorException`
    - [x] `DOMException`
    - [x] `ErrorException`
    - [x] `IntlException`
    - [ ] `LogicException`
      - [x] `BadFunctionCallException`
        - [x] `BadMethodCallException`
      - [x] `DomainException`
      - [x] `InvalidArgumentException`
      - [x] `LengthException`
      - [x] `OutOfRangeException`
    - [x] `PharException`
    - [x] `ReflectionException`
    - [x] `RuntimeException`
      - [ ] `mysqli_sql_exception`
      - [x] `OutOfBoundsException`
      - [x] `OverflowException`
      - [x] `PDOException`
      - [x] `RangeException`st
      - [x] `UnderflowException`
      - [x] `UnexpectedValueException`

### JavaScript

- [x] Error: Permission denied to access property "x"
- [x] InternalError: too much recursion
- RangeError
    - [x] RangeError: argument is not a valid code point
    - [x] RangeError: invalid array length
    - [x] RangeError: precision is out of range
    - [x] RangeError: radix must be an integer
    - [x] RangeError: repeat count must be less than infinity
    - [x] RangeError: repeat count must be non-negative
- ReferenceError
    - [x] ReferenceError: "x" is not defined
    - [x] ReferenceError: assignment to undeclared variable "x"
    - [x] ReferenceError: deprecated caller or arguments usage
    - [x] ReferenceError: invalid assignment left-hand side
    - [x] ReferenceError: reference to undefined property "x"
- SyntaxError
    - [x] SyntaxError: "use strict" not allowed in function with non-simple parameters
    - [x] SyntaxError: "x" is not a legal ECMA-262 octal constant
    - [x] SyntaxError: JSON.parse: bad parsing
    - [x] SyntaxError: Malformed formal parameter
    - [x] SyntaxError: Unexpected token
    - [x] SyntaxError: Using //@ to indicate sourceURL pragmas is deprecated. Use //# instead
    - [x] SyntaxError: missing ) after argument list
    - [x] SyntaxError: missing ; before statement
    - [x] SyntaxError: missing ] after element list
    - [x] SyntaxError: missing } after property list
    - [x] SyntaxError: redeclaration of formal parameter "x"
    - [x] SyntaxError: return not in function
    - [x] SyntaxError: test for equality (==) mistyped as assignment (=)?
    - [x] SyntaxError: unterminated string literal
- TypeError
    - [x] TypeError: "x" has no properties
    - [x] TypeError: "x" is (not) "y"
    - [x] TypeError: "x" is not a constructor
    - [x] TypeError: "x" is not a function
    - [x] TypeError: "x" is read-only
    - [x] TypeError: More arguments needed
    - [x] TypeError: invalid Array.prototype.sort argument
    - [x] TypeError: property "x" is non-configurable and can't be deleted
    - [x] TypeError: variable "x" redeclares argument
- Warning
    - [ ] Warning: -file- is being assigned a //# sourceMappingURL, but already has one
    - [ ] Warning: JavaScript 1.6's for-each-in loops are deprecated
    - [ ] Warning: unreachable code after return statement

### Ruby

- [x] NoMemoryError
- [x] ScriptError
  - [x] LoadError
  - [x] NotImplementedError
  - [x] SyntaxError
- [x] SecurityError
- [x] SignalException
  - [x] Interrupt
- [x] StandardError -- default for rescue
  - [x] ArgumentError
    - [x] UncaughtThrowError
  - [x] EncodingError
    - [x] CompatibilityError
    - [x] ConverterNotFoundError
    - [x] InvalidByteSequenceError
    - [x] UndefinedConversionError
  - [x] FiberError
  - [x] IOError
    - [x] EOFError
  - [x] IndexError
    - [x] KeyError
    - [x] StopIteration
  - [x] LocalJumpError
  - [x] NameError
    - [x] NoMethodError
  - [x] RangeError
    - [x] FloatDomainError
  - [x] RegexpError
  - [x] RuntimeError -- default for raise
  - [x] SystemCallError
    - [x] Errno::*
  - [x] ThreadError
  - [x] TypeError
  - [x] ZeroDivisionError
- [x] SystemExit
- [x] SystemStackError
- [x] fatal – impossible to rescue
