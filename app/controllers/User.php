<?php
header("Content-Type: application/json", TRUE);

class User extends Controller {
    function signup(Base $f3) {

        $data = $this->getInputData();

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender= $_POST['gender'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];


        $user = new UserModel($this->db);
        $f3->set('USER_NEW.first_name', $first_name);
        $f3->set('USER_NEW.last_name', $last_name);
        $f3->set('USER_NEW.gender', $gender);
        $f3->set('USER_NEW.address', $address);
        $f3->set('USER_NEW.number', $number);
        $f3->set('USER_NEW.email', $email);
        $f3->set('USER_NEW.password', $password);

        $user->add();


        $f3->reroute("/users_reg");


    }
    function agents_signup(Base $f3) {

        $data = $this->getInputData();

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender= $_POST['gender'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $account_number = $_POST['account_number'];
        $bank = $_POST['bank'];
        $farms = $_POST['farms'];
        $bvn = $_POST['bvn'];


        $user = new AgentsModel($this->db);
        $f3->set('USER_NEW.first_name', $first_name);
        $f3->set('USER_NEW.last_name', $last_name);
        $f3->set('USER_NEW.gender', $gender);
        $f3->set('USER_NEW.address', $address);
        $f3->set('USER_NEW.number', $number);
        $f3->set('USER_NEW.email', $email);
        $f3->set('USER_NEW.password', $password);
        $f3->set('USER_NEW.account_number', $account_number);
        $f3->set('USER_NEW.bank', $bank);
        $f3->set('USER_NEW.farms', $farms);
        $f3->set('USER_NEW', $bvn);

        $user->add();


        $f3->reroute("/agents_reg");

    }
    function farmers_signup(Base $f3) {

        $data = $this->getInputData();

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender= $_POST['gender'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $account_number = $_POST['account_number'];
        $bank = $_POST['bank'];
        $farm_name = $_POST['farm_name'];
        $farm_address = $_POST['farm_address'];
        $farm_number = $_POST['farm_number'];
        $farm_image = $_POST['farm_image'];
        $bvn = $_POST['bvn'];
        $my_agency = $_POST['agency'];



        $user = new FarmersModel($this->db);
        $f3->set('USER_NEW.first_name', $first_name);
        $f3->set('USER_NEW.last_name', $last_name);
        $f3->set('USER_NEW.gender', $gender);
        $f3->set('USER_NEW.address', $address);
        $f3->set('USER_NEW.number', $number);
        $f3->set('USER_NEW.email', $email);
        $f3->set('USER_NEW.password', $password);
        $f3->set('USER_NEW.account_number', $account_number);
        $f3->set('USER_NEW.bank', $bank);
        $f3->set('USER_NEW.farm_name', $farm_name);
        $f3->set('USER_NEW.farm_address', $farm_address);
        $f3->set('USER_NEW.farm_image', $farm_image);
        $f3->set('USER_NEW.farm_number', $farm_number);
        $f3->set('USER_NEW.bvn', $bvn);
        $f3->set('USER_NEW.agency', $my_agency );

        $user->add();


        $f3->reroute("/farmers_reg");

    }

    function login(Base $f3){
        $data = $this->getInputData();

        $email = $this->f3->get('POST.email');
        $password = $this->f3->get('POST.password');

        $user = new UserModel($this->db);
        $pass = new UserModel($this->db);
        $user1 = new AgentsModel($this->db);
        $pass1 = new AgentsModel($this->db);
        $user2 = new FarmersModel($this->db);
        $pass2 = new FarmersModel($this->db);
        $user->getByName($email);
        $user1->getByName($email);
        $user2->getByName($email);


        if($user->dry() && $user1->dry() && $user2->dry()){
            $this->f3->reroute('/login');
        }
        $pwd = $pass->password_encrypt($user->password);    //encrypts fellow's password
        $pwd1 = $pass1->password_encrypt($user1->password); //encrypts agents' password
        $pwd2 = $pass2->password_encrypt($user2->password); //encrypts farmers' password



        if(password_verify($password, $pwd) || password_verify($password, $pwd1) || password_verify($password, $pwd2)){
            $this->f3->set('SESSION.user', $user->email);
            $this->f3->set('SESSION.user', $user1->email);
            $this->f3->set('SESSION.user', $user2->email);

            $this->f3->reroute('/');
        }
        else{
            $this->f3->reroute('/login');
        }
    }

    function contact_us(Base $f3){
        $data = $this->getInputData();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sender = new ContactModel($this->db);

        $f3->set('USER_NEW.name', $name);
        $f3->set('USER_NEW.email', $email);
        $f3->set('USER_NEW.subject', $subject);
        $f3->set('USER_NEW.message', $message);
        $sender->add();

        $f3->reroute('/contact');
    }
}

?>
