<?php

class Foo extends Bar implements Baz, Buzz {
  public $test;

  function test() {
    return "test";
  }

  public function &passByReferenceTest() {
    $a = 1;
    return $a;
  }
}

$test = new Foo();

abstract class ReallyReallyReallyLongClassName extends AbstractModelFactoryResourceController implements TooMuchObjectOrientation, ThisIsMadness {
  // variable doc
  public $test;
  public $other = 1;
  public static $staticTest = ['hi'];
  static $cache;
  protected static $_instance;
  protected $fillable = ['title', 'requester_id', 'type', 'summary', 'proof'];
  protected $fillable2 = ['title', 'description', 'requester_id', 'type', 'summary', 'proof'];
  protected $test = [
    //test
  ];

  /**
   * test constructor
   *
   * @param \Test\Foo\Bar $test        hi
   * @param int           $test_int    test
   * @param string        $test_string test
   *
   * @return \Some\Test
   */
  public function __construct($test, $test_int = null, $test_string = 'hi') {
    parent::__construct($test_int ?: 1);
    $this->other = $test_string;
    $this->current_version = $current_version ?: new Content_Version_Model();
    self::$staticTest = $test_int;
  }

  public static function test_static_constructor($test, $test_int, $test_string) {
    $model = new self($test, $test_int, $test_string);
    $model = new self($really_really_really_really_really_really_really_really_long_array, $test_int, $test_string);
    return $model;
  }

  public function test_pass_by_reference(&$test)
  {
    $test + 1;
  }

  /**
   * This is a function
   */
  private function hi($input) {
    $test = 1;

    //testing line spacing
    $other_test = 2;


    $one_more_test = 3;
    return $input . $this->test;

  }

  public function reallyReallyReallyReallyReallyReallyReallyLongMethodName($input, $otherInput = 1) {
    return true;
  }

  // doc test
  public static function testStaticFunction($input) {
    return self::$staticTest[0];
  }

  public function returnTypeTest() : string
  {
    return 'hi';
  }

  final public static function bar()
  {
    // Nothing
  }

  abstract protected function zim();

  public function method(iterable $iterable): array {
    // Parameter broadened and return type narrowed.
  }

  public function method1() { return 'hi'; }

  public function method2() {
      return 'hi'; }

  public function method3()
    { return 'hi'; }

  public function testReturn(?string $name): ?string
  {
        return $name;
  }

  public function swap(&$left, &$right): void
  {
      if ($left === $right) {
          return;
      }

      $tmp = $left;
      $left = $right;
      $right = $tmp;
  }

  public function test(object $obj): object
  {
    return new SplQueue();
  }

  public function longLongAnotherFunction(
    string $foo,
    string $bar,
    int $baz
  ): string {
    return 'foo';
  }

  public function longLongAnotherFunctionOther(
    string $foo,
    string $bar,
    int $baz
  ) {
    return 'foo';
  }

  public function testReturnTypeDeclaration() : object
  {
    return new SplQueue();
  }

  public function testReturnTypeDeclarationOther()
  :
  object
  {
    return new SplQueue();
  }
}

$this->something->method($argument, $this->more->stuff($this->even->more->things->complicatedMethod()));

class A {}

$someVar = new ReaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaalyLongClassName();

class ClassName

extends ParentClass

implements \ArrayAccess, \Countable

{

    // constants, properties, methods

}

class FooBar { public $property; public $property2; public function method() {} public function method2() {} }

class FooBarFoo
{
    public function fooBarBaz ( $x,$y ,$z, $foo , $bar ) { /* Comment */ }
}

class ClassName extends ParentClass implements InterfaceClass {}

class ClassName extends ParentClass implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 {}

class ClassName extends ParentClass implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 {}

class ClassName extends VeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 implements InterfaceClass {}

class ClassName extends VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 implements InterfaceClass {}

class ClassName extends VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 implements VeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 {}

class ClassName extends VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 {}

class ClassName extends ParentClass implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1,VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName2, VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName3 {}

class ClassName extends VeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1,VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName2, VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName3 {}

class ClassName extends VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1,VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName2, VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName3 {}

class VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongFileName1 extends ParentClass implements InterfaceClass {}

class Custom_Plugin_NotificationPlaceholderSource extends Notification_Manager_DefaultPlaceholderSource {}

class field extends \models\base
{
    protected function pre_save( $input, $fields ) {
        $input['configs'] = json_encode( array_merge( $configs, $field_type->process_field_config_from_user( $input['definition'] ) ) );
        unset( $input['definition'] );
    }
}

class test {
    public function test_method() {
        $customer = (object) [ 'name' => 'Bob' ];
        $job = (object) [ 'customer' => $customer ];

        return "The customer for that job, {$job->customer->name} has an error that shows up after the line gets waaaaay toooo long.";
    }
}

class EmptyClass {}

class EmptyClassWithComments { /* Comment */ }

class MyClass implements MyOtherClass {}

class MyClass implements MyOtherClass, MyOtherClass1, MyOtherClass2 {}

class MyClass implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongMyClass {}

class VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongMyClass implements VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongMyOtherClass {}

class VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongMyClass implements MyOtherClass {}

class MyClass implements MyOtherClass, MyOtherClass, MyOtherOtherOtherClass, MyOtherOtherOtherOtherClass {}

class VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongMyClass implements MyOtherClass, MyOtherClass, MyOtherOtherOtherClass, MyOtherOtherOtherOtherClass {}
