<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author Moein
 */
class Client {
    private $client_id,$firstname,$lastname,$email,$cell_phone,$work_phone,$home_phone,$comment;
    function getClient_id() {
        return $this->client_id;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getCell_phone() {
        return $this->cell_phone;
    }

    function getWork_phone() {
        return $this->work_phone;
    }

    function getHome_phone() {
        return $this->home_phone;
    }

    function getComment() {
        return $this->comment;
    }

    function setClient_id($client_id) {
        $this->client_id = $client_id;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCell_phone($cell_phone) {
        $this->cell_phone = $cell_phone;
    }

    function setWork_phone($work_phone) {
        $this->work_phone = $work_phone;
    }

    function setHome_phone($home_phone) {
        $this->home_phone = $home_phone;
    }

    function setComment($comment) {
        $this->comment = $comment;
    }
    function setClient($firstname,$lastname,$email,$cell_phone,$work_phone,$home_phone,$comment){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->cell_phone = $cell_phone;
        $this->work_phone = $work_phone;
        $this->home_phone = $home_phone;
        $this->comment = $comment;
    }
    
    /**
     * 
     * @global PDO $db
     */
    function addClient(){
        global $db;
        $stmt= $db->prepare("INSERT INTO `clients`(`firstname`, `lastname`, `email`, `cell_phone`, `work_phone`, `home_phone`, `comment`)"
                . " VALUES(:firstname,:lastname,:email,:cell_phone,:work_phone,:home_phone,:commnet) ");
        $res = $stmt->execute([
            ":firstname"=> $this->firstname,
            ":lastname"=> $this->lastname,
            ":email"=>$this->email,
            ":cell_phone"=> $this->cell_phone,
            ":work_phone"=> $this->work_phone,
            ":home_phone"=> $this->home_phone,
            ":commnet"=> $this->comment
                ]);
    }
}
