<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        
        <a class="navbar-brand home col-md-2" href="index.php">Home</a>
        <div class="collapse navbar-collapse col-md-9" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" onclick="active('profile')" id="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visiMisi.php" onclick="active('visiMisi')" id="visiMisi">Visi dan Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.php" onclick="active('product')" id="product">Produk kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakKami.php" onclick="active('contact')" id="contact">Kontak kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php" onclick="active('about')" id="about">About us</a>
                </li>
            

            </ul>
        </div>
    </nav>




    <script>
    // membuat function dengan nama active, function ini berfungsi untuk memberitahu user, bahwa user berada di halaman yang mana berdasarkan navigasi

    function active(item) { //function active berisikan parameter item

        if (item === 'profile') { //ketika item samadengan profile
            document.querySelector('#profile').classList.add('active2'); //tambahkan class active2 pada id profile  
        } else { //apabila salah
            document.querySelector('#profile').classList.remove('active2'); //hapus class active2 pada id profile 
        }
        if (item === 'visiMisi') { //ketika item sama dengan visiMisi
            document.querySelector('#visiMisi').classList.add('active2'); //tambahkan class active2 pada id visiMisi 
        } else { // jika salah
            document.querySelector('#visiMisi').classList.remove('active2'); //hapus class active2 pada id visiMisi 

        }

        if (item === 'product') { //ketika item sama dengan product
            document.querySelector('#product').classList.add(
            'active2'); //tambahkan class active2 pada id product   
        } else { //jika salah
            document.querySelector('#product').classList.remove(
            'active2'); //hapus class active2 pada id product 

        }

        if (item === 'contact') { //ketika item sama dengan contact 
            document.querySelector('#contact').classList.add('active2'); //tambahkan class active2 pada id contact  
        } else { // jika salah
            document.querySelector('#contact').classList.remove('active2'); //hapus class active2 pada id contact 

        }

        if (item === 'about') { // ketika item sama dengan about
            document.querySelector('#about').classList.add('active2'); //tambahkan class active2 pada id about 
        } else { // jika salah
            document.querySelector('#about').classList.remove('active2'); //hapus class active2 pada id about 

        }


    }
</script>