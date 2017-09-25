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

    private $client_id, $firstname, $lastname, $email, $cell_phone, $work_phone, $home_phone, $comment;

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

    function setClient($firstname, $lastname, $email, $cell_phone, $work_phone, $home_phone, $comment) {
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
    function addClient() {
        global $db;
        $stmt = $db->prepare("INSERT INTO `clients`(`firstname`, `lastname`, `email`, `cell_phone`, `work_phone`, `home_phone`, `comment`)"
                . " VALUES(:firstname,:lastname,:email,:cell_phone,:work_phone,:home_phone,:commnet) ");
        $stmt->execute([
            ":firstname" => $this->firstname,
            ":lastname" => $this->lastname,
            ":email" => $this->email,
            ":cell_phone" => $this->cell_phone,
            ":work_phone" => $this->work_phone,
            ":home_phone" => $this->home_phone,
            ":commnet" => $this->comment
        ]);
    }

    /**
     * 
     * @global PDO $db
     * @param int $clientId
     * @return boolean
     */
    function getClient($clientId) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM clients WHERE client_id = :client_id");
        $stmt->bindValue(':client_id', "$clientId");
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return False;
        }
    }

    function updateClient() {
        global $db;
        $stmt = $db->prepare("UPDATE clients SET firstname = :firstname, lastname =:lastname , email = :email,"
                . "cell_phone = :cell_phone , work_phone = :work_phone,home_phone = :home_phone WHERE client_id=:client_id");
        $stmt->execute([
            ":client_id" => $this->client_id,
            ":firstname" => $this->firstname,
            ":lastname" => $this->lastname,
            ":email" => $this->email,
            ":cell_phone" => $this->cell_phone,
            ":work_phone" => $this->work_phone,
            ":home_phone" => $this->home_phone,
            ":commnet" => $this->comment
        ]);
    }

    function searchByFirstname($firstname) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM clients WHERE firstname like :firstname");
        $stmt->bindValue(':firstname', "%$firstname%");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return False;
        }
    }

    function searchByLastname($lastname) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM clients WHERE lastname like :lastname");
        $stmt->bindValue(':lastname', "%$lastname%");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return False;
        }
    }

    function searchByEmail($email) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM clients WHERE email like :email");
        $stmt->bindValue(':email', "%$email%");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return False;
        }
    }

    function searchByCellphone($cellphone) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM clients WHERE cell_phone like :cell_phone");
        $stmt->bindValue(':cell_phone', "%$cellphone%");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return False;
        }
    }

    function searchByWorkphone($workphone) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM clients WHERE work_phone like :work_phone");
        $stmt->bindValue(':work_phone', "%$workphone%");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return False;
        }
    }

    function searchByHomephone($homephone) {
        global $db;
        $stmt = $db->prepare("SELECT * FROM clients WHERE home_phone like :home_phone");
        $stmt->bindValue(':home_phone', "%$homephone%");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return False;
        }
    }

}
