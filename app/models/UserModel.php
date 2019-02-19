<?php

class UserModel extends \DB\Cortex {
    protected

        $table = 'users';
    public function add() {
        $this->copyfrom('USER_NEW');
        $this->insert();
    }
    public function all(){
        $this->load();
        return $this->query;
    }
    public function getById($id){
        $this->load(array('id=?', $id));
        return $this->query;
    }
    public function getByName($name){
        $this->load(array('email=?', $name));

    }
    public function password_encrypt($password) {
        $hash_format = "$2y$10$";
        $salt_length = 22;
        $salt = $this->generate_salt($salt_length);
        $format_and_salt = $hash_format . $salt;
        $hash = crypt($password, $format_and_salt);

        return $hash;
    }
    function generate_salt($length) {
        // Not 100% unique, not 100% random, but good enough for a salt
        // MD5 returns 32 characters
        $unique_random_string = md5(uniqid(mt_rand(), TRUE));

        // Valid characters for a salt are [a-zA-Z0-9./]
        $base64_string = base64_encode($unique_random_string);

        // But not '+' which is valid in base64 encoding
        $modified_base64_string = str_replace('+', '.', $base64_string);

        // Truncate string to the correct length
        $salt = substr($modified_base64_string, 0, $length);

        return $salt;
    }


}

?>