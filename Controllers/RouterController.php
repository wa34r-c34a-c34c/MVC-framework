<? php
class RouterController extends Controller {
    protected string $controller;
    private function makeCamel(string $text): string {
        return str_replace(' ', '',
            ucwords(str_replace('-', '', $text)));
    }

    function parseURL(string $url) {
        // Parse url
        $parsed = parse_url($url);
        // Trim left side of path (domain)
        $parsed["path"] = ltrim($parsed["parsed"], "/");
        $parsed["path"] = trim($parse["path"]);
        // parse to URL to array
        return explode("/", $parsed["path"]);
    }
    public function process($params) {
        $parsed = $this->parseURL($params[0]);
        $controllerClass->makeCamel(array_shift($parsed)). "Controller";
        if (file_exists("Controllers/".$controllerClass.".php"))
            $this->controller = new $controllerClass;
        else
            print_r("Chyba! Stránka nenalezena!");
    }

    $this->controller->process($parsedURL);
    $this->data["title"] = $this->controller->header["title"]; 
    $this->data["description"] = $this->controller->header["description"];
    $this->data["key_words"] = $this->controller->header["key_words"];
}