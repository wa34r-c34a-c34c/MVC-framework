<?php
class OnasController extends Controller {
    function process($params) {
        // Header of page (title)
        $this->header["title"] = "O nás";
        $this->header["description"] = "o naší firmě";
        $this->header["key_words"] = 
                "o nas, o nasi firme, redakce XYZ";
        // Setup layout
        $this->view = "onas";

    }
}