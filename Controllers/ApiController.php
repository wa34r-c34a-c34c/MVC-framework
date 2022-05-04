<?php
class ApiController extends Controller {
    function process($params) {
        // Header of page (title)
        header("Content-type:application/json; charset=UTF-8");

        $requestMethod = $_SERVER["REQUEST_METHOD"];

        if ($requestMethod == "GET") {
            if ($params[0] == "articles") {
                $data = ArticleManager::getAllArticles();
            }
        }
        
        if (!isset($data)) {
            $data = "Neznámé";
        }
        echo json_encode($data);

    }
}