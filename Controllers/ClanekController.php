<?php
class ClanekContoller extends Controller {
    function process($params) {
        // Header of page (title)
        if (!empty($params[0])) {
            //...
        }

        $this->header["title"] = "Domovská stránka";
        $this->header["description"] = "Hlavní stránka našeho webu";

        $this->data["articles"] = ArticleManager::getAllArticles();

        // Setup layout
        $this->view = "domov";

    }
}