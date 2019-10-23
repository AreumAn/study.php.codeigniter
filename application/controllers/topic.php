<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    // http://localhost:8080/index.php/topic
    function index(){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                Topic main page
            </body>
        </html>
        ';
    }

    // http://localhost:8080/index.php/topic/get/$id
    function get($id){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                Topic '.$id.'
            </body>
        </html>
        ';
    }
}
