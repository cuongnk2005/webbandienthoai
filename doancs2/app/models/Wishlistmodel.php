<?php 
    class Wishlistmodel extends BaseModel{
        public function GetWishlistItems($userId){
            $sql = "SELECT * FROM wishlist 
                    JOIN detailproduct ON wishlist.detailproduct_id = detailproduct.id
                    JOIN phoneoptions ON detailproduct.specificphone_id = phoneoptions.specificphone_id
                    JOIN product ON phoneoptions.product_id = product.product_id
                    WHERE user_id = $userId";
            $kq = $this->_query($sql);
            return $kq;
        }
        public function CountWishlistItems($userId){
            $sql = "SELECT COUNT(DISTINCT id) as count FROM wishlist WHERE user_id = $userId";
            $kq = $this->_query($sql);
            return mysqli_fetch_assoc($kq);
        }
        public function CheckProductInWishlist($userId, $detailproductId){
            $sql = "SELECT * FROM wishlist WHERE user_id = $userId AND detailproduct_id = $detailproductId";
            $kq = $this->_query($sql);
            if ($kq && mysqli_num_rows($kq) > 0) {
                return true; // Sản phẩm đã tồn tại
            }
            return false;
        }

        public function AddProductToWishlist($userId, $detailproductId){
            $sql = "INSERT INTO wishlist (user_id, detailproduct_id) VALUES ($userId, $detailproductId)";
            return $kq = $this->_query($sql);
        }
        public function DeleteProductFromWishlist($user_id, $detailproduct_id) {
            // Thực hiện xóa sản phẩm khỏi danh sách yêu thích của người dùng
            $sql = "DELETE FROM wishlist WHERE user_id = $user_id AND detailproduct_id = $detailproduct_id";
            $kq = $this->_query($sql);
            
            return $kq;  // Trả về kết quả (true/false)
        }
        
    }
?>