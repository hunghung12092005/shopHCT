<?php 
namespace models;

use commons\baseModel;

    class Login extends baseModel{
        public function findUser($data) {
            $sql = "SELECT * FROM USERS WHERE user_id = :user_id AND password = :password";
            return parent::pdoQuery($sql, $data);           
        }
        //đăng ký
        public function createUser($user_id, $user_name, $email, $hashed_password, $role) {
            $sql = "INSERT INTO users (user_id, user_name, email, password, role) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$user_id, $user_name, $email, $hashed_password, $role]);
        }
        //kiểm tra trùng
        public function checkDuplicateUserId($user_id)
                {
                    $sql = "SELECT COUNT(*) FROM users WHERE user_id = :user_id";
                    $stmt = $this->conn->prepare($sql);
                    $stmt->bindParam(':user_id', $user_id);
                    $stmt->execute();
                    return $stmt->fetchColumn();
                }
        //update user
        public function updateByIDUser($id, $data) {
            $sql = "UPDATE users 
                    SET user_id = ?, 
                        user_name = ?, 
                        password = ?, 
                        email = ? 
                    WHERE id = ?";
        
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$data['user_id'], $data['user_name'], $data['password'], $data['email'], $id]);
            return $stmt->fetchAll();
        }
        public function findIDUser($id) {            
            $sql = "SELECT * FROM users where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch();
        }
        //changeUser
        public function changeByIDUser($id, $newPassword)
            {
                $sql = "UPDATE users 
                        SET password = ?
                        WHERE id = ?";
                
                $this->pdoQueryAll($sql, [$newPassword, $id]);
            }
    }
?>