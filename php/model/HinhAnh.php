<?php
require_once("Root.php");
class HinhAnh extends Root{
	private $ma_cau_hoi;
	private $urlCauHoi = "../../image/cau_hoi/";
	private $urlDapAn = "../../image/dap_an/";

	function __construct(){}

	/*
	 * get, set ma_cau_hoi
	 */
	function setMaCauHoi($ma_cau_hoi){
		$this->ma_cau_hoi = $ma_cau_hoi;
	}
	function getMaCauHoi(){
		return $this->ma_cau_hoi;
	}

	/*
	 * get, set url
	 */
	function getUrlCauHoi(){
		return $this->urlCauHoi;
	}
	function getUrlDapAn(){
		return $this->urlDapAn;
	}

	/*
	 * tai hinh anh len server
	 * input: ten hinh anh
	 * output: url tap tin luu hinh anh
	 */
	function insertImages($image_name, $url){
		if($image_name["size"] >= 0){
			$file_tmp = $image_name["tmp_name"];

			//cat ten hinh anh thang mang
			$file_name_array = explode(".",$image_name["name"]);
			
			//lay duoi file
			$file_extensions = strtolower(end($file_name_array));
			$extensions = array("jpeg", "jpg", "png");
			$error = array();

			//kiem tra duoi file có nam trong danh sach duoi file hinh anh hay khong
			if(in_array($file_extensions, $extensions) === false){
				$error[] = "lỗi! sai định dạng";
			}
			else if (empty($error) == true && ($url == "cau_hoi")) {
				move_uploaded_file($file_tmp, $this->getUrlCauHoi().$image_name["name"]);
			}
			else if (empty($error) == true && ($url == "dap_an")) {
				move_uploaded_file($file_tmp, $this->getUrlDapAn().$image_name["name"]);
			}
			else{
				echo "lỗi tải hình ảnh";
			}
		}
	}

	/*
	 * save url hinh anh
	 * input: ten hinh anh
	 * output: none
	 */
}
?>