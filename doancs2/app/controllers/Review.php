<?php
class Review extends Controller {
    private $data = [];
    private $Reviewmodel;

    public function __construct() {
        $this->Reviewmodel = $this->Model("Reviewmodel"); // Tải model giỏ hàng
    }
 // Xử lý thêm bình luận
    public function addReview() {
        if (!isset($_COOKIE['user_id'])) {
            echo json_encode(["login" => false]);
            exit(); // Dừng lại nếu chưa đăng nhập
        }else {
            $user_id = $_COOKIE['user_id'];
            $user_name = $_COOKIE['user_name'];
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $product_id = $_POST["product_id"];
                $comment = $_POST["comment"];
                $starRating = isset($_POST["starRating"]) && $_POST["starRating"] !== '' ? (int)$_POST["starRating"] : 0;
                
                // Thêm bình luận vào bảng reviews
                $result = $this->Reviewmodel->AddReviewAndReturnId($user_id, $product_id, $comment, $starRating);

                if ($result) {
                    // Nếu có rating (số sao), cập nhật lại rating_count và average_rating trong bảng product
                    if ($starRating > 0) {
                        // Lấy tổng số lượng đánh giá và tổng điểm sao của sản phẩm
                        $product_inforRating = $this->Reviewmodel->getProductRatings($product_id);
                        $total_rating = $product_inforRating['rating_count'];
                        $total_stars = $product_inforRating['total_stars'];

                        // Tính số sao trung bình
                        $average_rating = round($total_stars / $total_rating, 1);

                        // Cập nhật lại rating_count và average_rating vào bảng product
                        $this->Reviewmodel->updateProductRatings($product_id, $total_rating, $average_rating);

                        // Lấy số lượng đánh giá theo số sao
                        $starRatingCounts = $this->Reviewmodel->getStarRatingCounts($product_id);

                        
                    }

                    // Thành công khi gửi bình luận
                    $success = true;
                    $message = "Bình luận của bạn đã được gửi thành công!";
                    $user_name = $_COOKIE['user_name'];
                    $comment = htmlspecialchars($comment);
                    $starRating = $starRating;
                    $review_id = $result['review_id'];

                    $result1 = $this->Reviewmodel->getReviewUpdateTimeById($review_id);
                    $review_update_time = $result1['review_update_time'];
                // Kiểm tra và gán giá trị mặc định nếu các biến không tồn tại hoặc không có giá trị
                    $rating_count = isset($total_rating) ? $total_rating : 0; // Gán giá trị mặc định là 0 nếu $total_rating không tồn tại
                    $average_rating = isset($average_rating) ? $average_rating : 0; // Gán giá trị mặc định là 0 nếu $average_rating không tồn tại
                    $starRatingCounts = $starRatingCounts ?? array_fill(0, 5, 0); // Mảng có 5 phần tử, mỗi phần tử là 0 nếu $starRatingCounts không tồn tại
                    // Đếm tổng số lượt đánh giá và nhận xét bao gồm các nhận xét (không có sao)
                    $totalReviews = $this->Reviewmodel->countAllReviewsByProductId($product_id);
                    $review_count = $totalReviews['total_reviews'];
                } else {
                    $success = false;
                    $message = "Lỗi hệ thống. Không thể gửi bình luận.";
                }

                // Gửi phản hồi dưới dạng JSON
                echo json_encode([
                    "login" => true,
                    "success" => $success,
                    "message" => $message,
                    "user_name" => $user_name,
                    "comment" => $comment,
                    "starRating" => $starRating, // Số sao đánh giá của bình luận này
                    "starRating_counts" => $starRatingCounts, // Số lượng đánh giá theo số sao
                    "rating_count" => $rating_count, // Tổng số lượt đánh giá
                    "average_rating" => $average_rating, // Điểm đáng giá trung bình 
                    "review_count" => $review_count, // Tổng số lượt đánh giá và nhận xét bao gồm các nhận xét (không có sao)
                    "review_update_time" => $review_update_time, // Thời gian cập nhật bình luận mới nhất
                ]); 
                exit(); // Dừng sau khi gửi phản hồi
            }    
        }
    }
    public function filterReviews() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $product_id = $_POST["product_id"];
            $starRating = $_POST["starRating"];
    
            // Gọi model để lấy danh sách đánh giá
            if ($starRating === 'all') {
                $reviews = $this->Reviewmodel->getAllReviews($product_id);
            } else {
                $reviews = $this->Reviewmodel->getReviewsByStarRating($product_id, $starRating);
            }
    
            // Kiểm tra kết quả và trả về JSON
            if ($reviews) {
                echo json_encode([
                    'success' => true,
                    'reviews' => $reviews,
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'message' => 'Không có đánh giá nào phù hợp.',
                ]);
               
            }
            exit();
        }
    }
    
    
    


}   
?>