<?php
/**
 * Messages model
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
 * Messages model class
 * 
 * @category PHP
 * @package  Fat-Free-PHP-Bootstrap-Site
 * @author   Mark Takacs <takacsmark@takacsmark.com>
 * @license  MIT 
 * @link     takacsmark.com
 */
class Messages extends DB\SQL\Mapper
{
    /**
    * Constructor, maps messages table fields to php object
    * 
    * @param DB\SQL $db Database connection
    */
    public function __construct(DB\SQL $db) 
    {
        parent::__construct($db, 'messages');
    }

    /**
    * Fetch all records
    * 
    * @return array
    */    
    public function all() 
    {
        $this->load();
        return $this->query;
    }

    /**
    * Fetch one record by id records
    * 
    * @param int $id Message id
    *
    * @return array
    */  
    public function getById($id) 
    {
        $this->load(array('id=?',$id));
        return $this->query;
    }

    /**
    * Add a Message record
    * there are no paramaters, becuase record data is copied from $_POST
    * it's one of the great features of f3
    * 
    * @return void
    */    
    public function add() 
    {
        $this->copyFrom('POST');
        $this->save();
    }

    /**
    * Edit a specific record
    *
    * @param int $id Message id
    * 
    * @return void
    */       
    public function edit($id) 
    {
        $this->load(array('id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }
    
    /**
    * Delete a record
    *
    * @param int $id Message id
    *      
    * @return void
    */       
    public function delete($id) 
    {
        $this->load(array('id=?',$id));
        $this->erase();
    }
}