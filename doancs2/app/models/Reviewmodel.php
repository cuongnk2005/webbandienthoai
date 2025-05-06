<?php 
    class Reviewmodel extends BaseModel
    {
        public function AddReviewAndReturnId($user_id, $product_id, $comment, $starRating)
        {
            $sql = "INSERT INTO reviews (user_id, product_id, comment, star_rating) 
                    VALUES ($user_id, $product_id, '$comment', $starRating)";
            $kq = $this->_query($sql);
            $sql2 = "SELECT LAST_INSERT_ID() AS review_id" ;
            $kq2 = $this->_query($sql2);
            return $kq2->fetch_assoc();
        }

        // Lấy thời gian của bình luận mới nhất dựa vào id 
        public function getReviewUpdateTimeById($review_id)
        {
            $sql = "SELECT updated_at AS review_update_time
                    FROM reviews 
                    WHERE review_id = $review_id";
            $result = $this->_query($sql);
            return $result->fetch_assoc();  
        }

        public function getProductRatings($product_id)
        {
            $sql = "SELECT COUNT(star_rating) AS rating_count, SUM(star_rating) AS total_stars
                    FROM reviews
                    WHERE product_id = $product_id AND star_rating > 0"; 
            $kq= $this->_query($sql);
            return $kq->fetch_assoc();
        }

        public function updateProductRatings($product_id, $total_rating, $average_rating)
        {
            $sql = "UPDATE product SET rating_count = $total_rating, average_rating = $average_rating
                    WHERE product_id = $product_id";
            return $this->_query($sql);
        }

        // Lấy số lượng đánh giá theo số sao
        public function getStarRatingCounts($product_id) {
            $sql = "SELECT star_rating, COUNT(*) as total_star_rating
                    FROM reviews
                    WHERE product_id = $product_id
                    GROUP BY star_rating";
            $kq = $this->_query($sql);
            $starRatingCounts = [];
            while ($row = mysqli_fetch_assoc($kq)) {
                $starRatingCounts[$row['star_rating']] = $row['total_star_rating'];
            }
            return $starRatingCounts;
        }

        public function countAllReviewsByProductId($product_id)
        {
            $sql = "SELECT COUNT(*) AS total_reviews
                    FROM reviews
                    WHERE product_id = $product_id";
            $kq = $this->_query($sql);
            return $kq->fetch_assoc();
        }

        // Lấy tất cả đánh giá của một sản phẩm
        public function getAllReviews($product_id) {
            $sql = "SELECT user.username, comment, star_rating, updated_at 
                    FROM reviews 
                    LEFT JOIN user ON reviews.user_id = user.id
                    WHERE product_id = $product_id
                    ORDER BY updated_at DESC";
            $result = $this->_query($sql);
            $reviews = [];
            while ($row = $result->fetch_assoc()) {
                $reviews[] = $row; // Lưu từng dòng dữ liệu vào mảng
            }
            return $reviews; // Trả về mảng các đánh giá
        }

        // Lấy đánh giá theo số sao
        public function getReviewsByStarRating($product_id, $starRating) {
            $sql = "SELECT user.username, comment, star_rating, updated_at 
                    FROM reviews 
                    LEFT JOIN user ON reviews.user_id = user.id
                    WHERE product_id = $product_id AND star_rating = $starRating
                    ORDER BY updated_at DESC";
            $result = $this->_query($sql);
            $reviews = [];
            while ($row = $result->fetch_assoc()) {
                $reviews[] = $row; // Lưu từng dòng dữ liệu vào mảng
            }
            return $reviews; // Trả về mảng các đánh giá
        }

    }
?>