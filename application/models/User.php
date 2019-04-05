<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        // Nomor 7
        // Pastikan password yang di insert ke database sudah di enkripsi dengan MD5
        // Pastikan tanggal dan jam yang dimasukkan ke database sudah sesuai saat login
        $data = array(
            "Username" => 
            "Email" => 
            "Pass" => 
            "RegisTime" => 
        );

        // Nomor 8
        // Panggil Fungsi isExist
        // Jika isExist mengembalikan True, maka Register return False
        // Jika tidak maka masukkan data ke database
        if() {
            return false;
        } else {
            // Masukkan data ke table Register
            // Masukkan data ke table login
        }
    }

    public function isExist() {
        // Nomor 9
        // Menerima masukkan Username yang akan dicek
    }

    public function findUser() {
        // Nomor 14
        // Ambil data yang diinputkan user
        // Cari apakah data ada pada table login
    }

    public function imageUpload($imgName) {
        $this->db->insert('image_path', array('ImgName' => $imgName));
    }

    public function getImage() {
        // Nomor 16
        // Mengambil data dari table 'image_path' dan mengembalikan data berupa array
    }
}