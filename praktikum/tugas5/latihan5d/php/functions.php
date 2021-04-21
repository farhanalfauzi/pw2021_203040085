<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi() {
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "pw_tubes_203040085");

	return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($sql) {
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data) {
	$conn = koneksi();

	$picture = htmlspecialchars($data['picture']);
	$productname = htmlspecialchars($data['product name']);
	$description = htmlspecialchars($data['description']);
	$price = htmlspecialchars($data['price']);
	$category = htmlspecialchars($data['category']);

	$query = "INSERT INTO gelang
					VALUES
					('', '$picture', '$productname', '$description', '$price', '$category')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data
function hapus($id) {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data) {
	$conn = koneksi();

	$picture = htmlspecialchars($data['picture']);
	$productname = htmlspecialchars($data['product name']);
	$description = htmlspecialchars($data['description']);
	$price = htmlspecialchars($data['price']);
	$category = htmlspecialchars($data['category']);

	$query = "UPDATE gelang
			SET
			picture = '$picture',
			productname = '$productname',
			description = '$description',
			price = '$price';
			category = '$category',
			WHERE id = '$id'
			";
}
?>