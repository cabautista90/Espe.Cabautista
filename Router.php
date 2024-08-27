<?php

class Router {
    public function route() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        
        switch ($url) {
            case 'home':
                include '../views/template.php';
                break;
            case 'libros':
                include '../controllers/LibroController.php';
                $controller = new LibroController();
                $controller->index();
                break;
            case 'autores':
                include '../controllers/AutorController.php';
                $controller = new AutorController();
                $controller->index();
                break;
            default:
                http_response_code(404);
                echo "404 Not Found";
                break;
        }
    }
}