<?php

function getData() {
  return htmlentities($_GET['name']);
}

function simple() {
  goto end;
  echo 1;

  end:
  echo 2;
}

echo "Name: " . getData();
