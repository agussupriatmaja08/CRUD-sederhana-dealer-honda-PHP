<div class="col-md-2 aside">
            <!-- membuat Side bar -->

            <div class="list-aside">
                <a href="#">Artikel</a>
            </div>
            <div class="list-aside">
                <a href="#">Event</a>
            </div>
            <div class="list-aside">
                <a href="galleryFoto.php">Galeri Foto</a>
            </div>
            <div class="list-aside">
                <a href="listKlien.php">klien kami</a>
            </div>

            <?php if ( isset($_SESSION['login']) || isset($_SESSION['admin'])) { ?>
                <div class="list-aside">
                <a href="logout.php">Logout</a>
                 </div>
           
            <?php } else{ ?>
                <div class="list-aside">
                <a href="#">Login</a>
                <ul>
                    <li> <a href="login.php">Sign In</a></li>
                    <li> <a href="signUp.php">Sign Up</a></li>
                </ul>
            </div>
                
                
                <?php }?>
        </div>