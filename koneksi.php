<?php
/**
 * Created by PhpStorm.
 * User: raka_matsukaze
 * Date: 3/20/18
 * Time: 12:05 PM
 */
    $koneksi = mysql_connect("localhost", "root", "") or die("Gagal koneksi ke DB");
    mysql_select_db("tf_outbond", $koneksi);