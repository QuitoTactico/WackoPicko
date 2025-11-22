<?php
// Compatibility wrapper for deprecated mysql_* functions
// This file provides mysqli equivalents for old mysql functions

if (!function_exists('mysql_query')) {
    function mysql_query($query, $link = null) {
        global $db;
        $conn = $link ?: $db->conn;
        return mysqli_query($conn, $query);
    }
}

if (!function_exists('mysql_fetch_assoc')) {
    function mysql_fetch_assoc($result) {
        return mysqli_fetch_assoc($result);
    }
}

if (!function_exists('mysql_fetch_array')) {
    function mysql_fetch_array($result, $result_type = MYSQLI_BOTH) {
        return mysqli_fetch_array($result, $result_type);
    }
}

if (!function_exists('mysql_num_rows')) {
    function mysql_num_rows($result) {
        return mysqli_num_rows($result);
    }
}

if (!function_exists('mysql_insert_id')) {
    function mysql_insert_id($link = null) {
        global $db;
        $conn = $link ?: $db->conn;
        return mysqli_insert_id($conn);
    }
}

if (!function_exists('mysql_real_escape_string')) {
    function mysql_real_escape_string($string, $link = null) {
        global $db;
        $conn = $link ?: $db->conn;
        return mysqli_real_escape_string($conn, $string);
    }
}

if (!function_exists('mysql_error')) {
    function mysql_error($link = null) {
        global $db;
        $conn = $link ?: $db->conn;
        return mysqli_error($conn);
    }
}

if (!function_exists('mysql_errno')) {
    function mysql_errno($link = null) {
        global $db;
        $conn = $link ?: $db->conn;
        return mysqli_errno($conn);
    }
}

if (!function_exists('mysql_affected_rows')) {
    function mysql_affected_rows($link = null) {
        global $db;
        $conn = $link ?: $db->conn;
        return mysqli_affected_rows($conn);
    }
}
?>
