
                <?php
                $number1=rand(1,9);
                $number2=rand(1,9);
                $sum=$number1+$number2;
                ?>
                <form method='post' action='captcha.php'>
                    <input type="hidden" name="correctsum" value="<?php echo $sum;?>"/>
                    <?php echo $number1.' + '.$number2.' = ';?>
                    <input type="text" name="captcha" /><br>
                    <input type="submit" name="submit" value="Trimite"/>
                </form>
         