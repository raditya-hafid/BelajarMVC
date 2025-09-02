<?php

    class About {

        public function index($nama = 'hafid', $pekerjaan = 'pelajar'){
            echo "Hallo, sama saya $nama , saya seorang $pekerjaan";
        }

        public function page(){
            echo 'About/page';
        }
    }