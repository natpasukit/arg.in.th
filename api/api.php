<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require_once(__DIR__ . '/../vendor/autoload.php');
// init App
$config = [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'logger' => [
            'name' => 'slim-app',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/../logs/app.log',
        ],
        'db' => [
          'host' => 'localhost',
          'user' => '-',
          'pass' => '-',
          'dbname' => 'sourcemod',
        ],
    ],
];

$app = new Slim\App($config);
$container = $app->getContainer(); // container for future use
// Add dependency to container
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('api_logger');
    $file_handler = new \Monolog\Handler\StreamHandler("../logs/app.log");
    $logger->pushHandler($file_handler);
    return $logger;
};
$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

$app->get('/', function (Request $request, Response $response) {
  $this->logger->addInfo("API Index"); // For development purpose
  $response->getBody()->write("Hello , This is arg.io API for ARG based on slim framework");
  return $response;
});

$app->get('/user' , function (Request $request , Response $response){
  $query = $this->db->prepare("SELECT * FROM `sm_admins`");
  $query->execute();
  $result = $query->fetchAll();
  return $response->withJson($result); // WithJson is the slimframework way to return JSON
});

$app->get('/user/{id}', function (Request $request, Response $response) {
  $id = $request->getAttribute('id');
  $query = $this->db->prepare("SELECT * FROM `sm_admins` where id = $id");
  $query->execute();
  $result = $query->fetchAll();
  return $response->withJson($result);
});

$app->get('/user/search/{name}', function (Request $request, Response $response) {
  $name = $request->getAttribute('name');
  $query = $this->db->prepare("SELECT * FROM `sm_admins` WHERE name LIKE '%$name%' ORDER BY id;");
  $query->execute();
  $result = $query->fetchAll();
  return $this->response->withJson($result);
});

$app->delete('/user/{id}', function (Request $request) {
  $id = $request->getAttribute('id');
  $query = $this->db->prepare("DELETE FROM `sm_admins` WHERE id = $id;");
  $query->execute();
});

$app->post('/user' , function(Request $request, Response $response){
  $input = $request->getParsedBody(); // getParsed **Body** slim way to parse data xml , json
  $authtype = $input['authtype'];
  $identity = $input['identity'];
  // $password = $input['password'];
  $flags = $input['flags'];
  $name = $input['name'];
  $immunity = $input['immunity'];
  if(!empty($input['flags']) || !empty($input['authtype']) || !empty($input['immunity'])){
    $flags = 'z';
    $authtype = 'steam';
    $immunity = '99';
  }
  // if(!empty($password)){
  //   $password = NULL;
  // }
  $query =  $this->db->prepare("INSERT INTO `sm_admins`(`authtype`, `identity`,`flags`,`name`,`immunity`) VALUES ('$authtype','$identity','$flags','$name','$immunity');");
  $query->execute();
  $input['id'] = $this->db->lastInsertId();
  return $this->response->withJson($input);
});

$app->put('/user/{id}', function (Request $request, Response $response) {
  $id = $request->getAttribute('id');
  $input = $request->getParsedBody();
  $authtype = $input['authtype'];
  $identity = $input['identity'];
  $flags = $input['flags'];
  $name = $input['name'];
  $immunity = $input['immunity'];
  if(!empty($input['flags']) || !empty($input['authtype']) || !empty($input['immunity'])){
    $flags = 'z';
    $authtype = 'steam';
    $immunity = '99';
  }
  $query = $this->db->prepare("UPDATE `sm_admins` SET `authtype`= '$authtype',`identity`='$identity',`flags`='$flags',`name`='$name',`immunity`='$immunity' WHERE `id` = $id;");
  $query->execute();
  return $this->response->withJson($input);
 });

 $app->get('/steam/vanity2id64/{url}', function (Request $request, Response $response) {
   $url = $request->getAttribute('url');
   $key = '30371CD2A1BD23E32C43414D4BDC6817';
   $vanity = "api.steampowered.com/ISteamUser/ResolveVanityURL/v0001/?key=$key&vanityurl=$url&format=json";
   // CURL from steam API
   $curl = curl_init();
   curl_setopt_array($curl, array(
       CURLOPT_URL => $vanity,
       CURLOPT_USERAGENT => 'vanity url to steamid',
       CURLOPT_RETURNTRANSFER => true
   ));
   $result = json_decode(curl_exec($curl),true);
   curl_close($curl);
   $this->logger->info("Curl on $url complete");
   if(!empty($result)){
     $result = $result['response']['steamid'];
     $this->logger->addInfo('response with : ' . $result);
   }else{
     $result = 'An error has occured while get data from API';
     $this->logger->addError($result);
   }
    return $result;
 });

 // server API for management
 $app->post('/server/update', function (Request $request, Response $response) {
   // Call shellscript
   echo shell_exec('sh /home/argsteam/script/CheckUpdate.sh');
   $result = 'On development'
   return $response->$result;
 });
$app->run();
?>
