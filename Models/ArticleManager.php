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
    public static function insertArticle(Article $article) {
        Db::singleQuery("
            INSERT INTO mvc.articles
            (title, key_words, content, image)
            VALUES (:title, :key_words, :content, :image);", array(
                ":title" => $article->title,
                ":key_words" => $article->key_words,
                ":content" => $article->content,
                ":image" => $article->image,
            ));
    }
}