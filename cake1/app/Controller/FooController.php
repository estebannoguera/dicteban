<?php
/**
 * Created by PhpStorm.
 * User: estebannoguerapenaranda
 * Date: 05/11/14
 * Time: 20:46
 */

class FooController extends AppController
{
    var $components = array('RequestHandler');
    var $uses = '';
    var $helpers = array('Text', 'Xml');

    function index()
    {
        $message = 'Testing';
        $this->set('message', $message);
        $this->RequestHandler->respondAs('xml');
        $this->viewPath .= '/xml';
        $this->layoutPath = 'xml';
    }
}