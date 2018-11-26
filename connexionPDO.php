<?php
/**
 * Created by PhpStorm.
 * User: groune mohamed
 * Date: 24/11/2018
 * Time: 21:24
 */

class connexionPDO
{
    private  static $cnxPDO= null;
    private const HOST='localhost' ;
    private const USER='root';
    private const PSW='';
    private const BD_NAME='select_test';
    private function  __construct()
{
    try {
        self::$cnxPDO = new PDO('mysql:host='.self::HOST.';dbname='.self::BD_NAME, self::USER,self::PSW );
    } catch (PDOException $e ) {
        die($e->getMessage());
    }
}
public static  function  getInstance (){
if(!self::$cnxPDO) {
    new connexionPDO() ;
}
return self::$cnxPDO;
}

}