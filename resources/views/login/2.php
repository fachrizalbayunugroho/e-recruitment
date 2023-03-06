<?php
// (A) START SESSION
session_start();

// (B) PROCESS LOGIN
if (isset($_POST["username"]) && !isset($_SESSION["username"])) {
  // (B1) USERS & PASSWORDS - SET YOUR OWN !
  $users = [
    "joe" => "123456",
    "jon" => "654321",
    "joy" => "987654"
  ];

  // (B2) CHECK & VERIFY
  if (isset($users[$_POST["username"]]) && $users[$_POST["username"]] == $_POST["password"]) {
    $_SESSION["username"] = $_POST["username"];
  }

  // (B3) FAILED LOGIN FLAG
  if (!isset($_SESSION["username"])) { $failed = true; }
}

// (C) REDIRECT TO HOME PAGE IF SIGNED IN - SET YOUR OWN !
if (isset($_SESSION["user"])) {
  header("Location: 4-dummy.php");
  exit();
}