<?php

include 'controller.php';

session_start();

if (isset($_POST['logout'])) {
  $_SESSION['user_id'] = null;
}

redirect('./login/', !isset($_SESSION['user_id']));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <title>Home page</title>
</head>

<body>
  
  <section class="flex justify-center items-center bg-center bg-cover h-screen w-screen" style="background-image: url('assets/index-bg.jpg')">
    <div class="bg-gray-100 rounded p-8">
      <p>Logged in as</p>
      <div class="text-4xl mb-10"><?= $connection->get_data('Users', $_SESSION['user_id'])['username'] ?></div>
      <form action="" method="post">
        <button class="bg-blue-500 rounded text-white px-4 py-1.5 w-full hover:bg-blue-600" name="logout" type="submit">Log out</button>
      </form>
    </div>
  </section>

</body>

</html>