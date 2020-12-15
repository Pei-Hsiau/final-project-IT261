<?php
include('config.php'); 
include('includes/header.php');

?>


<div class="wrapper">
                
                <main>
                <h1><?php echo $mainHeadline ;?></h1>
                    <h2 style = "background-color:
                                 <?php if (isset($_GET['today'])){echo $color;}?>"><?php echo $coffee;?></h2>
                    <p class="content"><?php echo $content;?></p>
                    <p class="click">Click below to find out what fascinating flavors that we ooffer for each day of the week!</p>
                    <ul class="coffeefood">
                        <li><a href="daily.php?today=Monday" class="bicerin">Monday</a></li>
                        <li><a href="daily.php?today=Tuesday" class="longblack" >Tuesday</a></li>
                        <li><a href="daily.php?today=Wednesday" class="mochaccino">Wednesday</a></li>
                        <li><a href="daily.php?today=Thursday" class="ristretto">Thursday</a></li>
                        <li><a href="daily.php?today=Friday" class ="americano">Friday</a></li>
                        <li><a href="daily.php?today=Saturday" class="cappuccino">Saturday</a></li>
                        <li><a href="daily.php?today=Sunday" class="irishcoffee">Sunday</a></li>
    
                    </ul>
                    <img src="../website/img/<?php echo $pic;?>" alt="<?php echo $alt; ?>" width="600" height="400" class="coffeepic"/>
                    <p class="reference"><?php echo $caption; ?></p>
                    <p class="time">The time now is <?php
                       date_default_timezone_set('America/Los_Angeles');
                        echo date('l jS \of F Y h:i:s A');
                    ?>.</p>
                    
                </main>
                <aside>
                    <h3>Brief origin of Coffee</h3>
                    <img src="../website/img/coffeestory.jpg" alt="coffee story" width="280" height="400" class="coffeestory"/>
                    <p class="quote">Photo by <a href="https://unsplash.com/@brigittetohm?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Brigitte Tohm</a> on <a href="https://unsplash.com/s/photos/coffee?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>
                    <p class="content-1">Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. When coffee berries turn from green to bright red in color – indicating ripeness – they are picked, processed, and dried. Dried coffee seeds (referred to as "beans") are roasted to varying degrees, depending on the desired flavor. Roasted beans are ground and then brewed with near-boiling water to produce the beverage known as coffee.</p>
                    
                </aside>


<?php 
include('includes/footer.php');
?>