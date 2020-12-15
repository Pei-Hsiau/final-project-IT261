<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
            <label>First name</label>
            <input type="text" name="firstName" 
            value="<?php if(isset($_POST['firstName']))
            {
                echo htmlspecialchars($_POST['firstName']);
                //sticky form
            } ?>">
            <span><?php echo $firstNameErr ;?></span>
            <label>Last name</label>
            <input type="text" name="lastName" 
            value="<?php if(isset($_POST['lastName']))
            {
                echo htmlspecialchars($_POST['lastName']);
                //sticky form
            } ?>">
            <span><?php echo $lastNameErr ;?></span>
            <label>Email</label>
            <input type="email" name="email"value="<?php if(isset($_POST['email']))
            {
                echo htmlspecialchars($_POST['email']);
                //sticky form
            } ?>">
            <span><?php echo $emailErr ;?></span>
            <label>Telephone</label>
            <input type="tel" placeholder="xxx-xxx-xxxx" name="tel"value="<?php if(isset($_POST['tel']))
            {
                echo htmlspecialchars($_POST['tel']);
                //sticky form
            } ?>">
            <span><?php echo $telErr ;?></span>
            
            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="Female"
                    <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female')
                           echo' checked="checked';?>
                    >Female</li>
                 <li><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male')echo' checked="checked';?>>Male</li>
                 <li><input type="radio" name="gender" value="non" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'non')echo' checked="checked';?>>Prefered not to answer</li>
                 
            
            </ul>
            <span><?php echo $genderErr ;?></span>
            
            <label>Favorite desserts</label>
            <ul>
                <li><input type="checkbox" name="favorite[]" value="Tiramisu"
                    <?php if(isset($_POST['favorite']) && $_POST['favorite'] == 'Tiramisu')
                           echo' checked="checked"';?>
                    >Tiramisu</li>
                 <li><input type="checkbox" name="favorite[]" value="Souffle"
                    <?php if(isset($_POST['favorite']) && $_POST['favorite'] == 'Souffle')
                           echo' checked="checked"';?>
                    >Souffle</li>
                 <li><input type="checkbox" name="favorite[]" value="Pie"
                    <?php if(isset($_POST['favorite']) && $_POST['favorite'] == 'Pie')
                           echo' checked="checked"';?>
                    >Pie</li>
                <li><input type="checkbox" name="favorite[]" value="Pudding"
                    <?php if(isset($_POST['favorite']) && $_POST['favorite'] == 'Pudding')
                           echo' checked="checked"';?>
                    >Pudding</li>
                 <li><input type="checkbox" name="favorite[]" value="Biscuit"
                    <?php if(isset($_POST['favorite']) && $_POST['favorite'] == 'Biscuit')
                           echo' checked="checked"';?>
                    >Biscuit</li>
            </ul>
            <span><?php echo $favoriteErr ;?></span>
            <label>Comments</label>
            <textarea name="comments">
            <?php if(isset($_POST['comments']))
            echo htmlspecialchars($_POST['comments']);
                ?>
            </textarea>
              <span><?php echo $commentsErr ;?></span>
            <input type="radio" name="privacy" value="
             <?php if(isset($_POST['privacy'])) {
                echo htmlspecialchars($_POST['privaacy'])
    ;}?> ">I agree to the privacy policy
            <span><?php echo $privacyErr ;?></span>
            <input type="submit" value="Submit">
            <p><a href="">Reset Form</a></p>
            
    
        </fieldset>
    
    </form>