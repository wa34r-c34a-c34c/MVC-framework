<?php
class ArticleManager {
    public static function getAllArticles(): array {
        return Db::query("
            SELECT *
            FROM mvc.articles
            ORDER BY article_id DESC");
    }

    public static function getArticleByID(int $ID): array {
        return Db::query("
            SELECT *
            FROM mvc.articles
            WHERE article_id = :id", array(
                ":id" => $id,
            ));
    }
}