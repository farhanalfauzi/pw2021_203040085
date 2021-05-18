<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_tubes2_203040085");

  return  $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($sql)
{
  $conn = koneksi();
  $result =  mysqli_query($conn, "$sql");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi untuk menambahkan data di dalam database
function tambah($data)
{
  $conn = koneksi();

  $gambar = htmlspecialchars($data['gambar']);
  $produk = htmlspecialchars($data['produk']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $harga = htmlspecialchars($data['harga']);
  $kategori = htmlspecialchars($data['kategori']);

  $query = "INSERT INTO gelang VALUES
            ('', '$gambar', '$produk', '$deskripsi', '$harga', '$kategori')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM gelang WHERE id = $id");

  return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $produk = htmlspecialchars($data['produk']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $harga = htmlspecialchars($data['harga']);
  $kategori = htmlspecialchars($data['kategori']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE gelang SET
            produk = '$produk',
            deskripsi = '$deskripsi',
            harga = '$harga',
            kategori = '$kategori',
            gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// fungsi cari data
function cari($keyword) {
  $conn = koneksi();

  $query = "SELECT * FROM gelang
              WHERE produk LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
?>