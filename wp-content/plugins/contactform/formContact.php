<?php 

/**
 *  Plugin Name: contactform 
*/


// function Plugin_Form_ContactUs(){
//     require_once('form.php');
// }

function form_plugin(){

    $content = '';
    $content .= '<h2>  </h2>';

    $content .= '<form method="post" action="">';
        $content .=       '<label>Full Name :</label>';
        $content .=       '<input type="text" name="fullname"   placeholder="Full name" /><br>';

        $content .=       '<label>Email :</label>';
        $content .=       '<input type="email" name="email"   placeholder="Email" /><br>';

        $content .=       '<label>subject :</label>';
        $content .=       '<input type="text" name="subject"   placeholder="Subject" /><br>';

        $content .=       '<label>content :</label>';
        $content .=       '<textarea name="content"   placeholder="Your Message"></textarea><br>';


        $content .=       '<input type="submit" name="save" value="Save" class="button-primary"  />';

    $content .= ' </form>';

    return $content;


    // $content .= '<form method ="post" action = "http://localhost/wordpress/index.php/thank-you/%22%3E';


    //     $content .= '<label for ="name"> Name </label>';
    //     $content .= '<input type = "text" name ="your_name" class="form-control" placeholder = "Enter your name" />';

    //     $content .= '<label for ="email"> Email </label>';
    //     $content .= '<input type = "email" name ="your_email" class="form-control" placeholder = "Enter your email" />';

    //     $content .= '<label for ="subject"> Subject </label>';
    //     $content .= '<input type = "text" name ="your_subject" class="form-control" placeholder = "Subject"/> ';

    //     $content .= '<label for ="message"> Message </label>';
    //     $content .= '<textarea name = "your_message" class="form-control" placeholder = "Enter your message"></textarea>' ;


    //     $content .= '<input type= "submit" name= "submit-btn" class=" btn btn-md" value= "Submit"/>';

    // $content .= '</form>';

    // return $content;
}


add_shortcode('formContact','form_plugin');


if(isset($_POST['save'])){

    create_table();
    insert_data();
}



function create_table(){

    $connection = mysqli_connect('localhost','root','');
    mysqli_select_db($connection,"wordpress3");

    $sql = "CREATE TABLE ContactUs( id int NOT NULL PRIMARY KEY AUTO_INCREMENT, fullname varchar(255) NOT NULL, email varchar(55) NOT NULL,subjecte varchar(55) NOT NULL, content varchar(255) NOT NULL)";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function insert_data(){

  $connection = mysqli_connect('localhost','root','');
  mysqli_select_db($connection,"wordpress3");

    $fullName=$_POST['fullname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $content=$_POST['content'];


    if( empty($fullName) || empty($email) ||  empty($subject) || empty($content))
    {
     echo '<h1 style="color:red;">All fields are required</h1>';

    }
    else
    {

         $query="INSERT INTO ContactUs (fullname,email,subjecte,content)" . "VALUES ('$fullName','$email','$subject','$content')";
         mysqli_query($connection,$query);

    }
}

function admin_dashborad(){
    add_menu_page('forms','Contact','manage_options','contact-dashbord','dashborad_admin_contact','dashicons-email',4);
}

add_action('admin_menu','admin_dashborad');
function dashborad_admin_contact(){
    require_once('dashborad.php');
}


?>