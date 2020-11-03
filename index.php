<?php

function getData() {
  return $_GET['name'];
}

echo "Name: " . getData();
