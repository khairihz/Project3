<?php
// Rédirection vers une page
function redirect($page){
    header('location: ' .URLROOT . '/' . $page);
}