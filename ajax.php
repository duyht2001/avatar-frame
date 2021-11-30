<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
	header("HTTP/1.0 404 Not Found");
}

$frames = [
	[
		'name' => 'Sinh Nhật Đội tình nguyện Khoa Công nghệ thực phẩm - ĐH Nha Trang Lần Thứ 12',
		'src'  => 'uploads/farme-cntp.png'
	],
	
];

header('Content-Type: application/json');
echo json_encode( $frames );
?>