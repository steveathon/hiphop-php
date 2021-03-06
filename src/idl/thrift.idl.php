<?php
/**
 * Automatically generated by running "php schema.php thrift".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "thrift_protocol_write_binary",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "transportobj",
        'type'   => Object,
      ),
      array(
        'name'   => "method_name",
        'type'   => String,
      ),
      array(
        'name'   => "msgtype",
        'type'   => Int64,
      ),
      array(
        'name'   => "request_struct",
        'type'   => Object,
      ),
      array(
        'name'   => "seqid",
        'type'   => Int32,
      ),
      array(
        'name'   => "strict_write",
        'type'   => Boolean,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "thrift_protocol_read_binary",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "transportobj",
        'type'   => Object,
      ),
      array(
        'name'   => "obj_typename",
        'type'   => String,
      ),
      array(
        'name'   => "strict_read",
        'type'   => Boolean,
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "thrift_protocol_write_compact",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "transportobj",
        'type'   => Object,
      ),
      array(
        'name'   => "method_name",
        'type'   => String,
      ),
      array(
        'name'   => "msgtype",
        'type'   => Int64,
      ),
      array(
        'name'   => "request_struct",
        'type'   => Object,
      ),
      array(
        'name'   => "seqid",
        'type'   => Int32,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "thrift_protocol_read_compact",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "transportobj",
        'type'   => Object,
      ),
      array(
        'name'   => "obj_typename",
        'type'   => String,
      ),
    ),
  ));

///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

