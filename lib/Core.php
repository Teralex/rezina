<?php

class Core
{
    public $path;                  
    public $strNameConlroller;      
    public $strMethodName;          

    public $pdo;                   

    public $date;                   
    public $datetime;   
    public $tm;   

    public function Url()
    {   
        $path = $_SERVER['REDIRECT_URL'];        
        $path = ( $p = strrpos($_SERVER['PHP_SELF'], '/') ) === false ? '' :  substr($path, $p);
        $selfUrl = ( empty($_SERVER['HTTPS']) ? 'http://' : 'https://' ).$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
        $this->selfPath = dirname($selfUrl);

        if ( $path && $path[0] == '/' ) $path = (string)substr($path, 1);
        $this->strMethodName = 'loginAct';
        if ( empty($path) )
            $this->strMethodName = ' loginAct ';
        if ( preg_match('#^(\w+)$#', $path) ) 
            $this->strMethodName =  $path."Act";
        else
            $this->strMethodName = 'loginAct'; 
        if ( !method_exists('Controllers', $this->strMethodName) )
            die ("Can't find method"); 
    }   

    public function Data()
    {
        $this->tm = time();
        $this->date = date('Y-m-d', $this->tm);
        $this->datetime = date('Y-m-d H:i:s', $this->tm);

        session_start();

        $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, array(PDO::ATTR_PERSISTENT => false));
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $this->pdo->exec('SET names utf8');     

        $this->{$this->strMethodName}();

        if( !empty($_SESSION['AUTH']) && $user = $this->pdo->query('SELECT * FROM users WHERE id='.(int)$_SESSION['AUTH'][0])->fetch(PDO::FETCH_ASSOC) )
        {
            unset($user['password']);
            $this->user = $user;
        }
    }

    public function View()
    {   
        require(SMARTY_DIR . "Smarty.class.php");

        $smarty = new Smarty();                
        $smarty->assign('selfPath',$this->selfPath);
        $smarty->assign('data',$this->Cont);

        if ( !empty($this->user) )
            $smarty->assign('user',$this->user);  
        $smarty->display(PATH_TEMPLATES .$this->Templ);
    }

}