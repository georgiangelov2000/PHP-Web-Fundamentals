<?php 

//overriding methods
// class Base{
//     public function printItem($string){
//         echo 'Foo'. $string . PHP_EOL;
//     }
// }

// class Child extends Base{
//     public function printItem($string){
//         echo 'Bar:' .$string . PHP_EOL;
//     }
// }

//overriding method rules 2
// class Base {
//     protected function printItem($string) {
//         echo 'Foo: ' . $string . PHP_EOL;
//     }
// }
    
// class Child extends Base {    
//     public function printItem($string) {
//         echo 'Bar: ' . $string . PHP_EOL;
//     }
// }

//overriding method rules 3
// class Base{
//     final public function printItem($string){
//         echo 'Foo: ' . $string . PHP_EOL;
//     }
// }

// class Child extends Base{
//     public function printItem($string){
//         echo 'Bar: ' . $string . PHP_EOL;
//     }
// }
// Cannot override final method Base::printItem()
