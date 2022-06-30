<!DOCTYPE html>
<html lang="en">

<head>

    <title>Online Art Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/explore1.css">



</head>

<body>


    <header>
        <nav>
            <div class="logo">
                <span>A</span>RT <span>S</span>MART
            </div>
            <div class="menu">
                <a href="">HOME</a>
                <a href="../art3/index.html#artist">ARTIST</a>
                <a href="../art3/explore.php">EXPLORE</a>
                <a href="contactus.php">CONTACT</a>
            </div>

            <div class="icon">
                <a href="../art3/login.php" class="btn btn-primary ms-lg-4 " type="button"
                    class="btn btn-primary">Log In</a>
            </div>
        </nav>
     </header>


   


    <div class="container">
        <h1 class="heading">type to search</h1><br>


        <input type="text" class="searchbox" placeholder="search Art By Price" id="search-box">

        <div class="image-container">
            <div class="image" data-title="100">
                <a href="img/exp/1.1.png">
                    <img src="img/exp/1.1.png" alt="">
                  
                </a>
                <a href=""><h3>Rs.100</h3>
            </a>
            
              
                   
            </div>

            <div class="image" data-title="200">
                <a href="img/exp/2.1.png">
                <img src="img/exp/2.1.png" alt="">
                
                </a>
                <a href=""><h3>Rs.200</h3></a>
            </div>

            <div class="image" data-title="200">
                <a href="img/exp/3.1.png">
                <img src="img/exp/3.1.png" alt="">
                </a>
                
                <a href=""><h3>Rs.200</h3></a>
            </div>

            <div class="image" data-title="300">
                <img src="img/exp/4.1.png" alt="">
                <h3>Rs.300</h3>
            </div>

            <div class="image" data-title="400">
                <img src="img/exp/5.1.png" alt="">
                <h3>Rs.400</h3>
            </div>

            <div class="image" data-title="400">
                <img src="img/exp/62.1.png" alt="">
                <h3>Rs.400</h3>
            </div>

            <div class="image" data-title="500">
                <img src="img/exp/72.1.jpg" alt="">
                <h3>Rs.500</h3>
            </div>

            <div class="image" data-title="500">
                <img src="img/exp/8.1.png" alt="">
                <h3>Rs.500</h3>
            </div>

            <div class="image" data-title="250">
                <img src="img/exp/9.1.png" alt="">
                <h3>Rs.250</h3>
            </div>
        </div>

    </div>

    <script>
        let searchBox = document.querySelector('#search-box');
        let images = document.querySelectorAll('.container .image-container .image');

        searchBox.oninput = () => {
            images.forEach(hide => hide.style.display = 'none');
            let value = searchBox.value;
            images.forEach(filter => {
                let title = filter.getAttribute('data-title');
                if (value == title) {
                    filter.style.display = 'block';
                }

                if (searchBox.value == '') {
                    filter.style.display = 'block';
                }
            });
        };
    </script>

   



</body>

</html>