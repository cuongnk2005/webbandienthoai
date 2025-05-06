<?php 
    class Feedbackmodel extends BaseModel{
        public function getAllFeedback() {
            $sql = "SELECT * FROM user_feedback";
            $result = $this->_query($sql);
            return $result;
        }

        public function deleteFeedback($id) {
            $sql = "DELETE FROM user_feedback WHERE id = $id";
            $result = $this->_query($sql);
            return $result;
        }
    }
?>