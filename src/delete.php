<?php

session_start();

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    require_once("connect.php");

    $id = strip_tags($_GET['id']);

    $sql = "DELETE FROM animaux WHERE id=:id";
    $query = $db->prepare($sql);

    $query->bindValue(':id', $id);
    $query->execute();

    $result = $query->fetch();

    if (!$result) {
        header("Location: index.php");
    }
}
