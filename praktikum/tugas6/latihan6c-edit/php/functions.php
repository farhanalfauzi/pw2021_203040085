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
              WHERE produk LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi untuk registrasi
function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  // jika username / password kosong
  if(empty($username) || empty($password)) {
    echo "<script>
            alert('username / password tidak boleh kosong');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('Username Sudah Digunakan');
          </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru
  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
?>