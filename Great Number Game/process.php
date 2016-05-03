<?php 
  session_start();

  if(!isset($_SESSION['number']))
  {
      $_SESSION['number'] = rand(1,100);
  }

  if(isset($_POST['guess']))
  {
      if($_POST['guess'] == $_SESSION['number'])
      {
          $_SESSION['correct'] = "<div class='box green'>
                                  <p>" . $_SESSION['number'] . " was the number</p>
                                  <form action='process.php' method='post'>
                                    <input type='hidden' name='reset' value='reset'>
                                    <input type='submit' value='Play Again!?'>
                                  </form>
                                  </div>";
      }
      else if ($_POST['guess'] < $_SESSION['number'])
      {
          $_SESSION['low'] =  "<div class='box red'>
                                <p>Too Low!</p>
                              </div>";
      }
      else
      {
          $_SESSION['high'] = "<div class='box red'>
                                <p>Too High!</p>
                              </div>";
      }
  }

  if(isset($_POST['reset']) && $_POST['reset'] == 'reset')
  {
      session_destroy();
      header("Location: great_number_game.php");
  }

  header("Location: great_number_game.php");
?>