<?php

require_once "Singleton.php";

function clientCode(): void
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();

    if ($s1 === $s2) echo "Singleton works, both variables contain the same instance.";
    else echo "Singleton failed, variables contain different instances.";
}

clientCode(); // Singleton works, both variables contain the same instance.
