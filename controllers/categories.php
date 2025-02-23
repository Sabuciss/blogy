<?php
require "functions.php";
require "Database.php";


$config = require("config.php");

$db = new Database($config["database"]);

$select = "SELECT * FROM fruits"; 

$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    echo "Atgriest ierakstus";
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE fruit_name LIKE  :nosaukums"; 
    $params = ["nosaukums" => $search_query];                 
}
 $fruits = $db->query($select, $params)->fetchAll();

$pageTitle ="kategorijas";
$style = "css/kopejais-stils.css";
require "views/categories.view.php"; 