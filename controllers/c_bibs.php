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
        unset($_POST['CalcWhat']);
        unset($_POST['distance']);
        unset($_POST['paceH']);
        unset($_POST['paceM']);
        unset($_POST['paceS']);
        unset($_POST['race_name']);
        unset($_POST['dateMonth']);
        unset($_POST['dateDay']);
        unset($_POST['dateYear']);

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->update('bibs', $_POST, 'WHERE user_id =' . $this->user->user_id);

        # Quick and dirty feedback
        echo "Your bib has been added. <a href='/users/calculator'>Update PRs</a>";


    }

    public function p_delete_5k($bib_id) {

        
        # Update their row in the DB with the new token
        $q = Array(
              "5kPRH" => "",
            "5kPRM" => "",
            "5kPRS" => "",
            "5kRaceDetails" => ""
        );
        
        DB::instance(DB_NAME)->update('bibs', $q, 'WHERE bib_id =' . $bib_id);
                # Render template
        # Send them back
        Router::redirect("/users/calculator");
}
public function p_delete_10k($bib_id) {

        
        # Update their row in the DB with the new token
        $q = Array(
              "10kPRH" => "",
            "10kPRM" => "",
            "10kPRS" => "",
            "10kRaceDetails" => ""
        );
        
        DB::instance(DB_NAME)->update('bibs', $q, 'WHERE bib_id =' . $bib_id);
                # Render template
        # Send them back
        Router::redirect("/users/calculator");
}

public function p_delete_halfMarathon($bib_id) {

        
        # Update their row in the DB with the new token
        $q = Array(
              "halfMarathonPRH" => "",
            "halfMarathonPRM" => "",
            "halfMarathonPRS" => "",
            "halfMarathonRaceDetails" => ""
        );
        
        DB::instance(DB_NAME)->update('bibs', $q, 'WHERE bib_id =' . $bib_id);
                # Render template
        # Send them back
        Router::redirect("/users/calculator");
}

public function p_delete_marathon($bib_id) {

        
        # Update their row in the DB with the new token
        $q = Array(
              "halfMarathonPRH" => "",
            "halfMarathonPRM" => "",
            "halfMarathonPRS" => "",
            "marathonRaceDetails" => ""
        );
        
        DB::instance(DB_NAME)->update('bibs', $q, 'WHERE bib_id =' . $bib_id);
                # Render template
        # Send them back
        Router::redirect("/users/calculator");
}} # end of the class
?>