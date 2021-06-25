<?php
    namespace App\Http\Controllers;

    class PagesController extends Controller {
        public function getIndex() {
            return view('Pages.welcome');
        }

        public function getAbout() {
            $first_name = 'Liang';
            $last_name = 'Wu';

            $full_name = $first_name . ' ' . $last_name;
            $email = 'liangwuweb@gmail.com';
            $data = [];
            $data['full_name'] = $full_name;
            $data['email'] = $email;
            return view('Pages.about')->withData($data);
        }

        public function getContact() {
            return view('Pages.contact');
        }
    }


?>