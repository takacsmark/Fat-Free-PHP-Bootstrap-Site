<?php
/**
 * Main controller of the sample applicaiton
 *
 * PHP version 5
 * 
 * @category PHP
 * @package  Fat-Free-PHP-Bootstrap-Site
 * @author   Mark Takacs <takacsmark@takacsmark.com>
 * @license  MIT 
 * @link     takacsmark.com
 */
 
 /**
 * Main controller of the sample applicaiton
 * 
 * @category PHP
 * @package  Fat-Free-PHP-Bootstrap-Site
 * @author   Mark Takacs <takacsmark@takacsmark.com>
 * @license  MIT 
 * @link     takacsmark.com
 */
class MainController extends Controller
{
    /**
     * Renders the dashboard view template
     *
     * @return echos the renderet template
     */
    function render() 
    {
        $this->f3->set('view', 'dashboard.htm');
        $template=new Template;
        echo $template->render('layout.htm');
    }


    // function render(){

    //     $message = new Messages($this->db);
    //     $message->key = 'Second message';
    //     $message->message = 'This is the second message inserted from code';
    //     $message->save();

    //     $messages = new Messages($this->db);
    //     $msg = $messages->all()[0];

    //     $this->f3->set('msg',$msg);
 //        $template=new Template;
 //        echo $template->render('template.htm');
    // }
}