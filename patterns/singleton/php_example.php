<?php $title = "PHP Design Pattern: Singleton"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../../css/cobalt2.prism.css">
    <link rel="stylesheet" href="../../css/line-number.css">
    <script src="../../js/prism/prism.js"></script>
    <script src="../../js/prism/prefixtree.js"></script>
</head>
<body>
<h2><?php echo $title; ?></h2>

<pre class="language-php line-numbers" data-start="1">
<code>&lt;?php
    /**
    * SINGLETON PATTERN
    *
    * The purpose of this pattern is to always maintain an available instance
    * of a given class that can be used within the instance of
    */

    /** CreditCardProcessor
    * A class that will have the desired properties and methods we need
    * to process the credit card transactions for the shopping cart.
    */
    class CreditCardProcessor
    {

        public function doSomething()
        {
            //...
        }
    }

    /** ECommerceStoreCart
    * The class that is our store's shopping cart.
    */
    class ECommerceStoreCart
    {
        private $cartFunctionality;

        /**
        * A private method that will check to see if there is an
        * instance of the CreditCardProcessor class. If there isn't then
        * we create it. By doing this we always maintain one
        * instance of the CreditCardProcessor class at all times.
        */
        private function __construct()
        {
            if($this->cartFunctionality === null)
            {
                $this->cartFunctionality = new CreditCardProcessor();
            }
        }
    }

    php?&gt;
</code>
</pre>
</body>
</html>