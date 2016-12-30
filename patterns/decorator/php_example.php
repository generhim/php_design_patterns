<?php $title = "PHP Design Pattern: Decorator"; ?>
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
    * DECORATOR PATTERN
    *
    * The DECORATOR PATTERN involves using the existing class but not
    * altering it in any fashion. Instead it builds on top of the existing
    * class thereby decorating the original class with new properties and
    * functionality.
    */

    /**
    * The original class
    * We are going to create other classes that will "decorate" this class.
    */
    class ActionFigure
    {
        private $manufacturer;
        private $name;

        public function __construct()
        {
            $this->manufacturer = "Hasbro";
            $this->numOfGuns    = 1;
            $this->movie        = "Star Wars";
            $this->name         = "Undetermined";
        }

        public function getManufacturer()
        {
            return $this->manufacturer;
        }

        public function setManufacturer($newManufacturer)
        {
            $this->manufacturer = $newManufacturer;
        }

        public function getName()
        {
            return $this->figureName;
        }

        public function setName($newName)
        {
            $this->name = $newName;
        }
    }

    /** Wookie class
    *   This wookie uses the information from the ActionFigure class but does not change it.
    */
    class Wookie
    {
        protected $actionFigure;
        protected $manufacturer;
        protected $name;
        protected $funnyTag;

        public function __construct(ActionFigure $af)
        {
            $this->actionFigure = $af;
            $this->manufacturer = $this->actionFigure->getManufacturer();
            $this->name         = $this->actionFigure->getName();
            $this->funnyTag     = " - The Friendly Wookie!";
            $this->setName("Chewie");
        }

        public function setName($newName)
        {
            $this->name = $newName . $this->funnyTag;
        }
    }


php?&gt;
</code>
</pre>
</body>
</html>