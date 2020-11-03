<?php

function getData() {
  return htmlentities($_GET['name']);
}

echo "Name: " . getData();
