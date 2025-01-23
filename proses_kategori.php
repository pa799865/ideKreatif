<?php 
include('config.php');

session_start();

if (isset($_POST['simpan'])) {
    $category_name = $_POST['category_name'];

    $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
    $result = mysqli_query($conn, $query);

    if ($exec) {
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Kategori Berhasil Disimpan'
        ];
    } else {
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Kategori Gagal Disimpan: ' . mysqli_error($conn)
            ];
    }

    header('Location: kategori.php');
    exit();
    } 

    if (isset($_POST['delete'])) {
        $cat_id = $_POST['catID'];
        $exec = mysqli_query($conn, "DELETE FROM categories WHERE category_id = '$cat_id'");

        if ($exec) {
        $_SESSION['notification'] = [
        'type' => 'primary',
        'message' => 'Kategori Berhasil Dihapus'
        ];
        } else {
        $_SESSION['notification'] = [
        'type' => 'danger',
        'message' => 'Kategori Gagal Dihapus: ' . mysqli_error($conn)
        ];
        }
        header('Location: kategori.php');
        exit();
        }


     if (isset($_POST['update'])) {
         $cat_id = $_POST['cat_ID'];
         $category_name = $_POST['category_name'];
         $query = "UPDATE categories SET category_name = '$category_name' WHERE category_id = '$cat_id'";
         $exec = mysqli_query($conn, $query);
         
    if ($exec) {
         $_SESSION['notification'] = [
         'type' => 'primary',
         'message' => 'Kategori Berhasil Diperbarui'
         ];
         } else {
         $_SESSION['notification'] = [
         'type' => 'danger',
         'message' => 'Kategori Gagal Diperbarui: ' . mysqli_error($conn)
         ];
         }
         header('Location: kategori.php');
         exit();
          }

