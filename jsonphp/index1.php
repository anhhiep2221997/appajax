<?php
$phpArray=array("hà nội","hồ chí minh","đà nắng");
class student{
    public $name;
    public $age;
    public $location;
    public function __construct($name,$age,$location)
    {
        $this->name=$name;
        $this->age=$age;
        $this->location=$location;
    }
}
$an=new student("nguyễn văn an", "21","hà nội");
echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($an);
echo "</pre>";

$phpjson1=json_encode($phpArray);
echo "<pre>";
print_r($phpjson1);
echo "</pre>";

$phpjson2=json_encode($an);
echo "<pre>";
print_r($phpjson2);
echo "</pre>";
