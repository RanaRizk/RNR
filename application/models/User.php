<?php

class Application_Model_user extends Zend_Db_Table_Abstract {

    protected $_name = "user";

    function addUser($data) {
        $row = $this->createRow();
        $row->userName = $data['userName'];
        $row->password = md5($data['password']);
        $row->email = $data['email'];
        $row->gender = $data['gender'];
        $row->country = $data['country'];
        $row->profilePicture = $data['profilePicture'];
        $row->signature = $data['signature'];

        return $row->save();
    }

    function getUserById($id) {
        return $this->find($id)->toArray();
    }

    //list user 
    function listUsers() {
        return $this->fetchAll()->toArray();
    }

    //delete user
    function deleteUser($id) {
        return $this->delete("id=$id");
    }

    //edit user
    function editUser($data) {
        if (!empty($data['password']))
            $data['password'] = md5($data['password']);
        else
            unset($data['password']);

        if (empty($data['email']))
            unset($data['email']);
        if (empty($data['userName']))
            unset($data['userName']);
        if (empty($data['profilePicture']))
            unset($data['profilePicture']);
        if (empty($data['signature']))
            unset($data['signature']);

        $this->update($data, "id=" . $data['id']);
        return $this->fetchAll()->toArray();
    }

    //ban user
    function banUser($data) {
        if ($data[0]['ban'] == 'off') {
            $data[0]['ban'] = 'on';
            return $this->update($data[0], "id=" . $data[0]['id']);
        } else {
            $data[0]['ban'] = 'off';
            return $this->update($data[0], "id=" . $data[0]['id']);
        }
    }

    function locksystem($data) {
        if ($data['ban'] == 'off') {
            $data['ban'] = 'on';
            return $this->update($data, "id=" . $data['id']);
        } else {
            $data['ban'] = 'off';
            return $this->update($data, "id=" . $data['id']);
        }
    }

    function typeUser($data) {

        if ($data[0]['type'] == 'regular') {
            $data[0]['type'] = 'admin';

            return $this->update($data[0], "id=" . $data[0]['id']);
        } else {
            $data[0]['type'] = 'regular';

            return $this->update($data[0], "id=" . $data[0]['id']);
        }
    }

}
