<?php

use Remorhaz\JSON\Data\Value\EncodedJson;
use Remorhaz\JSON\Path\Processor\Processor;
use Remorhaz\JSON\Path\Query\QueryFactory;

require 'vendor/autoload.php';

header("Content-type: application/json; charset=utf-8");

if(!isset($_POST['patch']) || empty($_POST['patch'])){
  echo json_encode([
    'status' => false,
    'message' => 'Invalid request - Patch is not Exists or Empty'
  ]);
  return die;
}

require_once 'config.php';
$json = API();

$processor = Processor::create();
$queryFactory = QueryFactory::create();
$encodedValueFactory = EncodedJson\NodeValueFactory::create();
$document = $encodedValueFactory->createValue($json);
$Error = false;
try {
  $query = $queryFactory->createQuery($_POST['patch']);
  $result = $processor->select($query, $document);
} catch (\Throwable $th) {
  echo json_encode([
    'status' => false,
    'message' => $th->getMessage()
  ]);
  return die;
}
$Response = [];
if(empty($result->decode())){
  echo json_encode([
    'status' => false,
    'message' => 'No value found'
  ]);
  return die;
}

echo json_encode([
  'status' => true,
  'message' => $result->decode()
]);
return die;
