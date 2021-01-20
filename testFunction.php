<?php
$x = 100;
$y = 10;
$op = "+";

switch ($op){
    case '+':
        plus();
        break;
    case '-':
        plus();
        break;
    case '*':
        plus();
        break;
    default:
        div();
}
function plus(); //+
{
    global $x,$y;
    echo "x + y = " .$x+$y."<br>" ;
}
function sub(); //-
{
    global $x,$y;
    echo "x - y = " .$x-$y."<br>" ;
}
function mul(); //*
{
    global $x,$y;
    echo "x * y = " .$x*$y."<br>" ;
}
function div(); ///
{
    global $x,$y;
    echo "x / y = " .$x/$y."<br>" ;
} 

//plus();
//sub();
//mul();
//div();

?>