<?php include 'includes/contact_check.php';?> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
        <label >First Name</label>
        <input type="text" name="first_name" value="<?php echo $first_name; ?>">
        <span class="error"><?php echo $first_name_Err;?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php echo $last_name; ?>">
        <span class="error"><?php echo $last_name_Err;?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $email_Err;?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php echo $phone; ?>">
        <span class="error"><?php echo $phone_Err;?></span>

        <label>Which computer languages you learnd</label>
        <ul>
            <?=GetCheckboxItems($my_langs,$langs)?>
        </ul>
        <span class="error"><?php echo $langs_Err;?></span>

        <label >Your browser</label>
        <select name="browser">           
            <?=GetSelectOptions($my_browser,$browser)?>          
        </select>
        <span class="error"><?php echo $browser_Err;?></span>

        <label>Comments</label>
        <textarea name="comments" ><?php echo $comments; ?></textarea>
        <span class="error"><?php echo $comments_Err;?></span>

        <label >Privacy</label>
        <ul>
            <li>               
                <input type="radio" name="privacy" value="agree" <?php if( $privacy=='agree' ) echo 'checked="checked"'; ?>>I agree!
            </li>             
        </ul>
        <span class="error"><?php echo $privacy_Err;?></span>

        <input type="submit" class="btn" value="Send it">
        <p><a href="" class="button">Reset</a></p>
    </fieldset>
</form>