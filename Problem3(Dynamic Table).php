<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        table, th, td {
        border:1px solid black;
        margin: auto;
}
    </style>
    <body>

                <!-- ================================== Problem 3 (Dynamic Table) ============================ -->
    <?php
    $users = [
        (object)[
            'id' => 1,
            'name' => 'ahmed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'football', 'swimming', 'running'
            ],
            'activities' => [
                "school" => 'drawing',
                'home' => 'painting'
            ],
            'phones'=>[012312312,1231513513,89746543],
        ],
        (object)[
            'id' => 2,
            'name' => 'mohamed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'swimming', 'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ],
            'phones'=>[1231513513,89746543],
        ],
        (object)[
            'id' => 3,
            'name' => 'menna',
            "gender" => (object)[
                'gender' => 'f'
            ],
            'hobbies' => [
                'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ],
            'phones'=>[],
        ],  
    ];
?>
<br>



<table>
  <tr>
    <th>id</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Hobbies</th>
    <th>Activities</th>
    <th>Phones</th>
  </tr>
    <?php 
        foreach ($users as $value){
        $id = $value->id;
        $name = $value->name;
        $gender = $value->gender->gender == "m"?"male":"female";
        $hobbies = implode("<br>", $value->hobbies);
        $activities = $value->activities["school"]."<br>".$value->activities["home"];
        $phones = implode("<br>", $value->phones);
    ?>
  <tr>
    <td><?=$id ?></td>
    <td><?=$name ?></td>
    <td><?=$gender ?></td>
    <td><?=$hobbies ?></td>
    <td><?=$activities ?></td>
    <td><?=$phones ?></td>
  </tr>
  <?php
    }
  ?>
  
</table>
    </body>
</html>