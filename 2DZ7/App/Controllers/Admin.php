<?php

namespace App\Controllers;

use App\Models\Article;
use App\AdminDataTable;
use SebastianBergmann\Timer\Timer;

/**
 * Class Admin
 * @package App\Controllers
 */
class Admin extends \App\Controller
{
    protected function action()
    {
        $models = Article::findAll();

        $functions = [

        $id = function (Article $article) :string {
            return $article->id;
        },


        $head = function (Article $article) :string {
            return $article->head;
        },

        $text = function (Article $article) :string {
            return $article->text;
        },


        $author = function (Article $article) :string {
            return $article->author;
        }

        ];

        $dataTable = new AdminDataTable($models, $functions);

        $dataTable->render( __DIR__ . '/../Templates/all.php');
    }
}
