`
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    
    <link rel="stylesheet" href="style.css">
    <style>
        select{
    width: 100%;
    padding: 1.2rem 1.4rem;
    font-size: 1.6rem;
    color: var(--light-black);
    text-transform: none;
    margin-top: 1.5rem;
    border: var(--border);
}
    </style>
</head>
<body>
    
<section class="header">
    <a href="home.php" class="logo">SmartCity.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="place.php">place</a>
        <a href="institutions.php">Institutions</a>
        <a href="restaurants.php">Restaurants</a>
        <a href="stay-home.php">Home-stay</a>
        <a href="book.php">book</a>
    </nav>


    <div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="heading" style="background:url(./IMAGE/o-ONLINE-BOOKING-facebook.jpg.crdownload)" >
<h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your stay!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                
            </div>
            <div class="inputbox">
                <span>email :</span>
                    <input type="text" placeholder="enter your email" name="email">
                
            </div>
            <div class="inputbox">
                <span>phone : </span>
                    <input type="text" placeholder="enter your phone-no" name="phone">
               
            </div>
            <div class="inputbox">
                <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputbox">
            <span>Home-stay :</span>
            <select name="homestay">
                <option value="">--select --</option>
                <option value="silver hill farm homestay">silver hill farm homestay</option>
                <option value="Amruthavana resort">Amruthavana resort</option>
                <option value="The River Tern Lodge">The River Tern Lodge</option>
                <option value="Greenview clarks Inn">Greenview clarks Inns</option>
                <option value="Inchara homestay">Inchara homestay</option>
                <option value="Royal Orchid Central">Royal Orchid Central</option>
                
            </select>
                    
            </div>

            <div class="inputbox">
                <span>no of people :</span>
                    <input type="number" placeholder=" no of guests" name="guests">
            </div>
            <div class="inputbox">
                <span>arrival :</span>
                    <input type="date"  name="arrival">
            </div>
            <div class="inputbox">
                <span>leaving :</span>
                    <input type="date"  name="leaving">
            </div>
        </div>

<input type="submit" value="submit" class="btn" name="send" >

    </form>
</section>












<section class="footer">
    <div class="box-con">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
            <a href="place.php"> <i class="fas fa-angle-right"></i>place</a>
            <a href="institutions.php"> <i class="fas fa-angle-right"></i>institutions</a>
            <a href="restaurants.php"> <i class="fas fa-angle-right"></i>restaurants</a>
            <a href="stay-home.php"> <i class="fas fa-angle-right"></i>stay-home</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i>ask quetions</a>
            <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i>provacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i>know about</a>
            <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-789 </a>
            <a href="#"> <i class="fas fa-phone"></i> +124-459-785 </a>
            <a href="#"> <i class="fas fa-envelope"></i> adcd@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Bengaluru,India -577561</a>
        </div>

        <div class="box">
            <h3>follow  us</h3>
            <a href="#"> <i class="fab fa-facebook"></i>facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

<div class="credit">created by <span>Buddies</span> | All rights reserved!</div>






</section>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="script.js"></script>






</body>
</html>