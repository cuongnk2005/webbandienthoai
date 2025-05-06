<?php
    class Contact_usmodel extends BaseModel{
        public function SendContactForm($name, $email, $phone, $subject,$message) {
            $sql = "INSERT INTO user_feedback (name, email, phone, subject ,message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
            $result = $this->_query($sql);
            return $result;
        }
    }
?> 