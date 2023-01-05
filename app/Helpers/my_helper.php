<?php 

function get_breadcumb($title1, $title2){
    if(session('role')== 'admin'){
        echo '<ol>
        <li><a href="/admin">Admin</a></li>
        <li>'.$title1.'</li>
    </ol>
    <h2>'.$title2.'</h2>';
    }else{
        echo '<ol>
        <li><a href="/">Home</a></li>
        <li>'.$title1.'</li>
    </ol>
    <h2>'.$title2.'</h2>';
    }
}

function get_role(){
    if(session('role') == 'admin'){
        return 'admin';
       
    }else{
        return 'home';
    }
}