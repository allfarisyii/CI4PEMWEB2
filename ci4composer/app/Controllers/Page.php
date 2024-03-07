<?php namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs pages";
    }

    public function biodata()
    {
        echo "
        Nama: Muhammad Alfarisyi
        Tempat, tanggal lahir: Jombang, 18 Februari 2004
        Jenis kelamin: Laki-laki
        Status perkawinan: Belum kawin
        Agama: Islam
        Pekerjaan: Mahasiswa
        Alamat: Dsn. Bulurejo RT 011 RW 02 Ds. Bulurejo Diwek Jombang
        ";
    }
}