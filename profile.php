<?php
session_start();

// Check if user_id is set in the session, if yes then redirect to dashboard.php else redirect to login.php
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
} else {
    header("Location: dashboard.php");
    exit;
}