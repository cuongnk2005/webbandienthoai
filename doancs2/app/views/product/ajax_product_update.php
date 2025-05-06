<?php
    if (isset($result)){
    // Chuẩn bị dữ liệu trả về
    $response = $result;
} else {
    // Nếu không tìm thấy dữ liệu
    $response = ['error' => 'Không tìm thấy thông tin cho màu sản phẩm này'];
}

// Trả về dữ liệu JSON
header('Content-Type: application/json');
echo json_encode($response);

?>
