<?php

class Image{
    private $_image_id;
    private $_user_id;
    private $_title;
    private $_url;
    private $_date;
    private $_user;

    public function __construct(array $data){
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
                $this->$method($value);
        }
    }

    // SETTERS
    public function setImage_id($id){
        $image_id = (int) $id;

        if ($id > 0)
            $this->_image_id = $id;
    }
    public function setUser_id($id){
        $id = (int) $id;

        if ($id > 0)
            $this->_user_id = $id;
    }
    public function setTitle($title){
        if (is_string($title))
            $this->_title = $title;
    }
    public function setUrl($url){
        if (is_string($url))
            $this->_url = $url;
    }
    // SECURISE CAR ON MET LA DATE NOUS MEME PAS L'USER
    public function setDate($date){
        $this->_date = $date;
    }
    public function setUser($user){
        if (is_string($user))
            $this->_user = $user;
    }
    // GETTERS
    public function id(){
        return $this->_id;
    }
    public function title(){
        return $this->_title;
    }
    public function url(){
        return $this->_url;
    }
    public function date(){
        return $this->_date;
    }
    public function user(){
        return $this->_user;
    }
}