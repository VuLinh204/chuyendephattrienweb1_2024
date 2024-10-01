<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel
{

    public function findUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id = ?';
        return $this->select($sql, [$id]);
    }

    public function findUser($keyword)
    {
        $sql = 'SELECT * FROM users WHERE user_name LIKE ? OR user_email LIKE ?';
        $params = ['%' . $keyword . '%', '%' . $keyword . '%'];
        return $this->select($sql, $params);
    }

    /**
     * Authentication user
     * @param $userName
     * @param $password
     * @return array
     */
    public function auth($userName, $password)
    {
        $md5Password = md5($password);
        $sql = 'SELECT * FROM users WHERE name = ? AND password = ?';
        $params = [$userName, $md5Password];
        return $this->select($sql, $params);
    }

    /**
     * Delete user by id
     * @param $id
     * @return mixed
     */
    public function deleteUserById($id)
    {
        $sql = 'DELETE FROM users WHERE id = ?';
        return $this->delete($sql, [$id]);
    }

    /**
     * Update user
     * @param $input
     * @return mixed
     */
    public function updateUser($input)
    {
        $sql = 'UPDATE users SET 
                 name = ?, 
                 password = ? 
                WHERE id = ?';
        $params = [
            mysqli_real_escape_string(self::$_connection, $input['name']),
            md5($input['password']),
            $input['id']
        ];
        return $this->update($sql, $params);
    }

    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertUser($input)
    {
        $sql = "INSERT INTO users (name, password) VALUES (?, ?)";
        $params = [
            $input['name'],
            md5($input['password'])
        ];
        return $this->insert($sql, $params);
    }

    /**
     * Search users
     * @param array $params
     * @return array
     */
    public function getUsers($params = [])
    {
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE ?';
            $params = ['%' . $params['keyword'] . '%'];
            return $this->select($sql, $params);
        } else {
            $sql = 'SELECT * FROM users';
            return $this->select($sql);
        }
    }
}
