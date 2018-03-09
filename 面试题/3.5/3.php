<?php
include_once('./2.php');

function sortUsers($users)
{
    $len = count($users);
    for ($i = 0; $i < $len; $i++) {
        for ($j = $len - 1; $j > $i; $j--) {
            if ($users[$j]->age < $users[$j - 1]->age) {
                $temp          = $users[$j];
                $users[$j]     = $users[$j - 1];
                $users[$j - 1] = $temp;
            }
        }
    }
    return $users;
}

for ($i = 0; $i < 10; $i++) {
    $users[] = new User('li' . $i, rand(20, 60));
}
$users = sortUsers($users);
// print_r($users);
function cmp($a, $b)
{
    // return ($a->age < $b->age) ? -1 : 1;
    return $a->age <=> $b->age;
    
}

usort($users, 'cmp');
print_r($users);
