<?php
$con = new mysqli("localhost","root","","cuevana6");

if(!$con){
    echo $con->error;
}