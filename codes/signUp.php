<?php
session_start();
include('./logic.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <header class="text-black body-font bg-purple-700 h-16 flex align-center items-center">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Books</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <a href="./signUp.php" class="mr-5 hover:text-gray-900">FeedBack</a>
        <a class="mr-5 hover:text-gray-900">Sign in</a>
        <a href="./login.php" class="mr-5 hover:text-gray-900">Login</a>
        <a class="mr-5 hover:text-gray-900">Logout</a>
      </nav>
      <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
        Get Started
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </header>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-medium text-4xl text-blue-500">Sign Up</h1>
        <p class="leading-relaxed mt-4">
          Ready to take the first step towards exciting opportunities? Create
          your account now and embark on a journey filled with endless
          possibilities!
        </p>
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">
          Sign Up
        </h2>

        <!-- form starts -->


        <form method="post">
          <div class="relative mb-4">

            <label for="email" class="leading-7 text-sm text-gray-600">User Name</label>
            <input type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
          </div>
          <div class="relative mb-4">
            <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
          </div>
          <input value="Sign Up" name="submit" type="submit" id="signUp" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
        </form>

        <!-- form ends here -->


        <div class="text-xs text-gray-500 mt-3">
          <p class="inline-block">Already have an account?</p>
          <a href="/frontend/components/login/login.php"><span class="text-blue-500 text-md">Login</span></a>
        </div>
      </div>
    </div>
  </section>
  <?php
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    $isSignnedUp = signUp($email, $password);
    if($isSignnedUp) {
      echo 'done';
    } else {
      echo 'not done';
    }
  }
  ?>

</body>

</html>