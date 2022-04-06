<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Add Data
	function addData(){
		$Name = $_POST['tname'];
		$Deadline = $_POST['tdeadline'];
		$Details = $_POST['tdetails'];
		$Subject = $_POST['tsubject'];
		$Priority = $_POST['tpriority'];
		
		$query = "INSET INTO tb_to_do (name_td, deadline_td, details_tb, subject_tb, priority_tb, status_tb)
					VALUE ('$Name', '$Deadline', '$Detail', '$Subject', '$Priority', 'Belum'"

		return $this->execute($query);
	}
	
	// Hapus Data
	function delete(){
		$id_hapus = $_GET['id_hapus'];

		$query = "DELETE FROM tb_to_do WHERE id = '$id_hapus'";

		return $this->execute($query);
	}
}

?>