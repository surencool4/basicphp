<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $name = $_GET['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}