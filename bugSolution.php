function foo(array $arr) {
  $arr = array_map(function($value) {
    return $value * 2;
  }, $arr);
}