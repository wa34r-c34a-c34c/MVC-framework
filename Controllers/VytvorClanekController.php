<?php
class VytvorClanekController extends Controller {
    function process($params) {
        // Header of page (title)
        $this->header["title"] = "Vytvoření článku";
        $this->header["description"] = 
        "Na této stránce se vkládají články do databáze.";

        $this->data["formular"] = $_POST;
        
        if (isset($_POST["title"])) {
            $article = new Article($_POST["title"], $_POST["content"]);
            if (!empty($_POST["key_words"])) {
                $article->setKeys($_POST["key_words"]);
            }
            if (!empty($_POST["image"])) {
                $article->setImage($_POST["image"]);
            }
            
            ArticleManager::insertArticle($article);
        }

        // Setup layout
        $this->view = "vytvorclanek";

    }
}