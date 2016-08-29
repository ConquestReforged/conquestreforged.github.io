<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'ConquestReforgedBasic',
    'title' => 'Conquest Reforged (basic)',
    'version' => '1.0.1',
    'priority' => 0,
    'location' => 'conquestreforgedbasic.json',
);

$packages[] = array(
    'name' => 'ConquestReforgedAdvanced',
    'title' => 'Conquest Reforged (advanced)',
    'version' => '1.0.1',
    'priority' => 0,
    'location' => 'conquestreforgedadvanced.json',
);

if (count(array_intersect(array('devbuild'), $keys)) > 0)
$packages[] = array(
    'name' => 'ConquestReforgedDev',
    'title' => 'Conquest Reforged (dev)',
    'version' => '1.0.1',
    'priority' => 0,
    'location' => 'conquestreforgeddev.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
