<?php
class Article {
    public int $article_id;
    public string $title;
    public string $key_words;
    public string $content;
    public string $image;

    public function __construct(string $title, string $content) {
        $this->title = $title;
        $this->key_words = "";
        $this->content = $content;
        $this->image = "";
    }

    public function setKeys(string $key_words) {
        $this->key_words = $key_words;
    }
    public function setImage(string $image) {
        $this->image = $image;
    }
}