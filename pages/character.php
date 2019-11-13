<?php require('../header.php'); ?>
<?php include '../navbar.php'; ?>
<?php include '../classes/Character_class.php'; ?>
<?php
$db = new DB_connect('hoplon');

// Il faudra changer le nombre écrit en dur, et le remplacer par l'id correspondant au compte de l'utilisateur avec une jointure
$usersSkillsList = $db->query('SELECT skl_strength, skl_agility, skl_stamina, skl_speed FROM hp_skills WHERE skl_id = 2');

foreach($usersSkillsList as $key1 => $user_skills_array) { 
    $char_strength = $user_skills_array->skl_strength;
    $char_agility = $user_skills_array->skl_agility;
    $char_stamina = $user_skills_array->skl_stamina;
    $char_speed = $user_skills_array->skl_speed;
}


$characteSkills = new Character($char_strength, $char_agility, $char_stamina, $char_speed);
?>

<div class="character_table">
    <div class="character-sheet character-1">
        <table>
            <tbody>
                <tr>
                    <th>Force</th>
                    <td><?php echo $characteSkills->getStrength(); ?></td>
                </tr>
                <tr>
                    <th>Agilité</th>
                    <td><?php echo $characteSkills->getAgility(); ?></td>
                </tr>
                <tr>
                    <th>Endurance</th>
                    <td><?php echo $characteSkills->getStamina(); ?></td>
                </tr>
                <tr>
                    <th>Vitesse</th>
                    <td><?php echo $characteSkills->getSpeed(); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
