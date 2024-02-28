<?php

if (empty ($POST ['Username'])){
    die("Name is required");
}
print_r($POST);