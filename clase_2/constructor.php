<?php
    class Foo
    {
        /*  manera Java
         * public function Foo()
        {
            echo 'constructor invocado';
        }
        */
        /* método constructor */
        public function __construct()
        {
            echo 'metódo constructor';
        }

        public function test()
        {
            echo 'test invocado';
        }
    }

    $objFoo = new Foo();
    $objFoo->test();