<!DOCTYPE html>
<html>

    <body>
        <div class="container"> 
            
            <div class="row"> 


                <?php echo $this->calendar->generate($year, $month); ?>

            </div>
            <?php if ($this->session->userdata('admin_area') != 0): ?>
            <input type="submit" value="Nieuw evenement" name="Event" class="btn btn-primary btn-lg" onclick="javascript:venster('<?php echo site_url('calendar/newEvent'); ?>',600,300);"/>
            <?php endif; ?>
        </div>
        <br>



    </body>
    <footer> 