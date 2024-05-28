<?php
namespace Iplague\Project\Controllers;
use Iplague\Project\Viewer;
class CatalogueController
{
    public function index(): void
    {
        $page = 'catalogue';
        $title = 'Catalogue Page';
        $content = 'Its Catalogue page';
        $info = 'information';

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]
        );
        $view->render();
    }
}