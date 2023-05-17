<?php echo "<img src='https://cravatar.com/avatar/" . md5( strtolower( trim( htmlspecialchars($_POST['email'])  ) ) ) . "' />"; ?>
