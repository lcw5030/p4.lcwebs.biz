<?php
class bibs_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }
    }

    public function add() {

        # Setup view
        $this->template->content = View::instance('v_bibs_add');
        $this->template->title   = "New Bib";

        # Render template
        echo $this->template;

    }

    public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;


        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('bibs', $_POST);

        # Quick and dirty feedback
        echo "Your bib has been added. <a href='/bibs/add'>Add another</a>";

        # Send them back
        Router::redirect("/users/profile");

    }
}