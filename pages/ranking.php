<?php require('../header.php'); ?>
<?php include '../navbar.php'; ?>
<?php
$db = new DB_connect('hoplon');

$users_name_list = $db->query('SELECT user_pseudo FROM hp_users');

?>
<ol>
    <?php
    foreach($users_name_list as $key1 => $user_name_array) { 
        foreach($user_name_array as $key2 => $user_name) { 
            ?>
                <li><?php echo $user_name; ?>
            <?php
        } 
    }
    ?>
</ol>

<?php include '../footer.php'; ?>