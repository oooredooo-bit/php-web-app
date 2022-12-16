<?php

$product =  $_POST['productId'];

// connect to mysql
$brands['foods'] = ['pedigree', 'hollistic', 'nutrichunks'];
$brands['treats'] = ['jerhigh', 'dental stix', 'cookies'];

echo json_encode($brands[$product]);
