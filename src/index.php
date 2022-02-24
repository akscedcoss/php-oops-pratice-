<?php
echo "Pratice -Oops using PHP ";
class cart
{
    public $na;
    function __construct($name)
    {
        $this->na = $name;
    }
    public function getName()
    {
        return $this->na;
    }
}

$item = new cart("Apple");
echo '<pre>';
echo $item->getName();
echo '</pre>';
