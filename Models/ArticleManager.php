<?php
class ArticleManager {
    public function getAllArticles() {
        return Db::query("
            SELECT *
            FROM mvc.articles
            ORDER BY article_id DESC");
    }
}