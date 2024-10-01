<?php
require_once 'configs/database.php';

abstract class BaseModel
{
    // Database connection
    protected static $_connection;

    public function __construct()
    {
        if (!isset(self::$_connection)) {
            self::$_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
            if (self::$_connection->connect_errno) {
                printf("Connect failed: %s\n", self::$_connection->connect_error);
                exit();
            }
        }
    }

    /**
     * Query in database with prepared statements
     * @param $sql
     * @param $params
     */
    protected function query($sql, $params = [])
    {
        $stmt = self::$_connection->prepare($sql);
        if ($params) {
            // Chuyển đổi các tham số
            $types = str_repeat('s', count($params)); // Giả định tất cả tham số là chuỗi
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        return $stmt;
    }

    /**
     * Select statement
     * @param $sql
     * @param $params
     */
    protected function select($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        $result = $stmt->get_result();
        $rows = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    /**
     * Delete statement
     * @param $sql
     * @param $params
     */
    protected function delete($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->affected_rows > 0; // Trả về true nếu xóa thành công
    }

    /**
     * Update statement
     * @param $sql
     * @param $params
     */
    protected function update($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->affected_rows > 0; // Trả về true nếu cập nhật thành công
    }

    /**
     * Insert statement
     * @param $sql
     * @param $params
     */
    protected function insert($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return self::$_connection->insert_id; // Trả về ID của bản ghi vừa thêm
    }
}
