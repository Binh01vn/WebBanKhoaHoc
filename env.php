<?php
const DBHOST = "localhost";
const DBNAME = "ezcode";
const USERNAME = "root";
const PASSWORD = "";

const BASE_URL = "http://ezcode.test:8888/";

function route($url)
{
    return BASE_URL . $url;
}

function pathAssets()
{
    return "public/userAssets/";
}

function adminPathAssets()
{
    return "http://localhost/PHP2/ezcode/public/adminAssets/";
}
?>