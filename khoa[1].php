<?php
	class Khoa
	{
		private $id;
		private $ten_khoa;

		function getId()
		{
			return $this->id;
		}
		 function setTen_khoa($ten_khoa)
		{
			$this->ten_khoa = $ten_khoa;
		}
		function getTen_khoa()
		{
			return $this->ten_khoa;
		}
	}
?>.