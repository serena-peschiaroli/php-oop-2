<?php
class Category
{
    protected $name;
    protected $icon;

    public function __construct($_name, $_icon)
    {
        $this->setName($_name);
        $this->setIcon($_icon);
    }

    public function setName($_name)
    {
        if ($_name === 'Cat' || $_name === 'Dog' && (strlen($_name) < 30)) {
            $this->name = $_name;

        }
    }

    public function setIcon($_icon)
    {
       
        $this->icon = $_icon;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}
