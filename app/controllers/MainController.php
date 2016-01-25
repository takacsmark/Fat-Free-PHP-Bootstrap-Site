<?php
/**
 * Controller of the main dashboard view sample applicaiton (dashboard.htm)
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
 * Controller class
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
     * @return void
     */
    function render() 
    {
        $this->f3->set('view', 'dashboard.htm');
        $template=new Template;
        echo $template->render('layout.htm');
    }

    /**
     * Renders the messages view template with f3 <repeat>
     *
     * @return void
     */
    function displayMessages()
    {
        $messages = new Messages($this->db);
        
        $this->f3->set('messages', $messages->all());
        $this->f3->set('view', 'messages.htm');
        $template=new Template;
        echo $template->render('layout.htm');        
    }

    /**
     * Provide json api representation of messages data
     *
     * @return void
     */
    function apiMessages() 
    {
        $messages = new Messages($this->db);
        $data = $messages->all();
        
        $json = array();
        
        foreach($data as $row) {
            $item = array();
            
            foreach($row as $key => $value) {
                $item[$key] = $value;
            }
            
            array_push($json, $item);
        }
 
        echo json_encode($json);               
    }
    
    /**
     * Renders the messages view template with AJAX
     *
     * @return void
     */    
    function displayMessagesAjaxView() 
    {
        $this->f3->set('view', 'messagesajax.htm');
        $template=new Template;
        echo $template->render('layout.htm');          
    }
}