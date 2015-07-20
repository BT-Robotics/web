<?php
  $username = 'root';
  $password = 'root';
  $database = 'scouting';
  $servername = 'localhost:8889';
  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn) {
    $sql = $_POST['sql'];
    $result = $conn->query($sql);
    if ($result) {
      while($row = $result->fetch_array(MYSQLI_NUM)) {
        $values[] = $row;
      }
      echo json_encode(array(
        "code" => 0,
        "entryId" => $values[$_POST['num']][0],
        "entryTime" => $values[$_POST['num']][1],
        "teamName" => $values[$_POST['num']][2],
        "teamNumber" => $values[$_POST['num']][3],
        "teamNotes" => $values[$_POST['num']][4],
      ));
    } else {
      echo json_encode(array(
        "code" => 2,
        "entryId" => null,
        "entryTime" => null,
        "teamName" => null,
        "teamNumber" => null,
        "teamNotes" => null,
      ));
    }
    mysqli_close($conn);
  } else {
    echo json_encode(array(
      "code" => 1,
      "entryId" => null,
      "entryTime" => null,
      "teamName" => null,
      "teamNumber" => null,
      "teamNotes" => null,
    ));
  }
?>
