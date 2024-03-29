<?php

/**
 * Database connection 
 */

require_once('rb.php');
require_once('config.php');
require_once('sessions.php');

// use DB as DB;

class Operations extends DB
{
    /**
     * Connecting to Database
     */
    public function __construct()
    {
        $this->DB_Connect(true);
    }
    /**
     * @param tablename,array of table fields to be inserted
     * @return id of inserted data else @return false
     */
    public function insert($table, $fields)
    {
        $insertData = R::dispense($table);
        foreach ($fields as $key => $value) {
            $insertData->$key = $value;
        }
        $id = R::store($insertData);
        if ($id) {
            return $id;
        } else {
            return false;
        }
    }

    /**
     * @param tablename,array_containing_fields,id
     *      fields and their values to be updated
     * @return true if updated else @return false
     */
    public function update($table, $id, $fields)
    {
        $updateData = R::load($table, $id);
        if ($updateData['id'] != 0) {
            foreach ($fields as $key => $value) {
                $updateData->$key = $value;
            }
            R::store($updateData);
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param table-name,id
     * @return true if deleted else @return false
     */
    public function delete($table, $id)
    {
        $deleteData = R::load($table, $id);
        if ($deleteData['id'] != 0) {
            R::trash($deleteData);
            return true;
        } else {
            return false;
        }
    }
    /**
     * @param tablename,userid
     * @return array
     */
    public function SelectByID($table, $id)
    {
        $return = R::load($table, $id);
        if ($return['id'] != 0) {
            return $return;
        } else {
            return false;
        }
    }

    /**
     * @param table-name
     * @return Multi-Dimensional-array of that table
     */
    public function SelectAll($table)
    {
        return R::findAll($table);
    }

    /**
     * @param tablename,array-arguments-list
     *      arguments-list example : id=1,name=myname 
     * @return Multi-Dimensional-array
     */
    public function SelectByArgs($table, $args)
    {
        $sql = "";
        $condition = "";
        foreach ($args as $key => $value) {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT * FROM " . $table . " WHERE " . $condition;
        $query  = R::getAll($sql);
        if ($query)
            return $query;
        else
            return FALSE;
    }

    /**
     * @param table-name,array-arguments the details to check
     *      arguments-list example : id=1,name=myname
     * @return TRUE/FALSE
     *      TRUE if exists in DB else FALSE if not exists
     */
    public function Validate($table, $args)
    {
        $sql = "";
        $condition = "";
        foreach ($args as $key => $value) {
            $condition .= $key . " = '" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT * FROM " . $table . " WHERE " . $condition;
        $query  = R::getAll($sql);
        return ($query) ? TRUE : FALSE;
    }

    public function __destruct()
    {
        $this->DB_Connect(false);
    }
}
