<?php
error_reporting(0);
require "../news/classes/NewsDB.class.php";
class NewsService extends NewsDB{
    function getNewsById($id){
        try{
            $sql = "SELECT id, title, (SELECT name FROM category WHERE category.id=msgs.category) AS
                category, description, source, datetime FROM msgs WHERE id = $id";
            $result = $this->_db->query($sql);
            //var_dump($result);
            if(!is_object($result))
                throw new Exception($this->_db->lastErrorMsg());
            return $this->db2Arr($result);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    function xmlRpcGetNewsById($method_name, $args, $extra){
        if(!is_array($args) || count($args) <> 1)
            return array('faultCode'=>-3, 'faultString'=>'Parameters missing!');
        $id = $args[0];
        $result = $this->getNewsById($id);
        if(!is_array($result))
            return array('faultCode'=>-2, 'faultString'=>"Error: $result !");
        elseif(empty($result))
            return array('faultCode'=>-1, 'faultString'=>"News with id $id not found!");
        else
            return base64_encode(serialize($result));
    }
}
/* Читаем запрос */
$request = file_get_contents("php://input");
/* Создаем XML-RPC сервер */
$server = xmlrpc_server_create();
/* Регистрируем метод класса */
xmlrpc_server_register_method($server, "getNewsById", [new
NewsService, "xmlRpcGetNewsById"]);
/*Отдаем правильный заголовок*/
header('Content-Type: text/xml;charset=utf-8');
/* Отдаем результат */
print xmlrpc_server_call_method($server, $request, null);