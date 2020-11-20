<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class perkenalan extends CI_Controller{

        public function index(){
            echo "<h1 style='color:black; text-align:center'>Introduction</h1>";
            echo "<p> Perkenalkan <br>
                    Nama saya Muhammad Budy Hartanto
                    <br>
                    Saya tinggal di Kabupaten Tegal 
                    <br>
                    ";
        }

    }

?>