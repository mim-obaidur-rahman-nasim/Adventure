<?php 
session_start();
  if($_SESSION['email']==true){
      echo " ".$_SESSION['email'];
  }
  else{
      header('location:log.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
<style>
   @import url('../css/fonts.css');


body{
    margin:0;
    box-sizing:border-box;
    overflow-x:hidden;
}

:root{
    /*Theme color*/
    --text-gray:#3f4954;
    --text-light:#686666da;
    --bg-color:#0f0f0f;
    --white:#ffff;
    --midnight:#104f55;
    /*gradiant color*/
    --sky:linear-gradiant(120deg, #a1c4fd 0%, #c2e9fb 100%);
    /*theme font family*/
    --abel:'Abel',cursive;
    --anton:'Anton',cursive;
    --josefin:'Josefin',cursive;
    --lexend:'Lexend',cursive;
    --livvic:'Livvic',cursive;
}

a{
    text-decoration: none;
    color:var(--text-gray);
}
.flex-row{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

ul{
    list-style-type: none;
}

h1{
    font-size: var(--lexend);
    font-size: 2.5rem;
}

h2{
    font-family: var(--lexend);
}

h3{
    font-family: var(--abel);
    font-size: 1.3rem;
}

button.btn{
    border: none;
    border-radius: 20rem;
    border: none;
    border-radius: 2rem;
    padding: 1rem 3rem;
    font-size: 1rem;
    font-family: var(--Livvic);
    cursor: pointer;
}

.navi{
    background:white;
    padding:0 2rem;
    height:0rem;
    min-height:7vh;
    overflow:hidden;
    transition: height 1s ease-in-out;
}

.navi .nav-menu{
    justify-content: space-between;
}

.navi .toggle-collapse{
    position: absolute;
    top:0%;
    width: 90%;
    cursor: pointer;
    display: none;
}
.navi .toggle-collapse .toggle-icons{
    display: flex;
    justify-content: flex-end;
    padding: 1.7rem 0;
}

.navi .toggle-collapse .toggle-icons i{
    font-size: 1.4rem;
    color: var(--text-gray);
}

.collapse{
    height: 230rem;
}

.navi .nav-items{
    
    display: flex;
    margin: 0;
}

.navi .nav-items .nav-link{
    padding: 1.6rem 1rem;
    font-size: 1.1rem;
    position: relative;
    font-family: var(--abel);
    font-size: 1.1rem;
}
.navi .nav-items .nav-link:hover{
    background-color: var(--midnight);
}
.navi .nav-items .nav-link:hover a{
    color: var(--white);
}

.navi .nav-brand a{
    font-size:1.6rem;
    padding:1rem 0;
    display: block;
    font-family: var(--lexend);
    font-size: 1.6rem;
}

.navi .social{
    padding: 1.4rem 0;
}

.navi .social i{
    padding: 0.2rem;
}

.navi .social i:hover{
    color: #a1c4cf;
}

main .site-title{
    background: url('../assets/Background-image.png');
    background-size: cover;
    height: 110vh;
    display: flex;
    justify-content: center;
}

main .site-title .site-background{
    padding-top: 10rem;
    text-align: center;
    color: var(--white);
}

main .site-title h1,h3{
    margin: .3rem;
}

main .site-title .btn{
    margin: 1.8rem;
    background-color: skyblue;
}

main .site-title .btn:hover{
    background: transparent;
    border: 1px solid var(--white);
    color: var(--white);
}
.tom{
    text-align: center;
    color: black;
    
}

/*carosel*/
main .blog .container{
    background: url('Abract1.png');
    background-repeat: no-repeat;
    background-position: right;
    height: 100vh;
    width: 100%;
    background-size: 65%;
}
section{
    margin-top: 1px;
    margin-bottom: 2px;
}

h3{ 
    text-align: center;
    margin-top: 2px;
    margin-bottom: 2px;
}
h2{
    text-align: center;
    margin-top: 2px;
    margin-bottom: 2px;
}
.blog-content{
   /* display: flex; */
    flex-direction: row;
    text-align: center;
    width: 80%;
    margin: 3rem 8rem;
    box-shadow: 0 15px 20px rgba (0,0,0,0.2);
}


/*footer.footer{
    height: 50%;
    position: relative;
    margin-top: 600px;
    /*background-image:url('Background-imag.png');
    background-repeat: no-repeat;
    display: inline-block;
    background-size: 210%;
}*/

footer.footer .container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

footer.footer .container > div{
    flex-grow: 1;
    flex-basis: 0;
    padding: 3rem .9rem;
}

footer.footer .container h2{
    color:white;
}
footer.footer .container p{
    color:white;
    text-align: center;
}
footer.footer .newsletter .form-element{
    background: white;
    display: inline-block;
}

footer.footer .newsletter .form-element input{
    display: inline-block;
    padding: .5rem .7rem;
    border: none;
    background: transparent;
    color: white;
    font-family: var(--Josefin);
    font-size: 1rem;
    width: 74%;
}

footer.footer .newsletter .form-element span{
    background: var(--sky);
    padding: .5rem .7rem;
    cursor: pointer;
}

footer.footer .instagram div > img{
    display: inline-block;
    width: 25%;
    height: 50%;
    margin: .3rem .4rem;
}

footer.footer .follow div i{
    color: var(--white);
    padding: .4rem;
    
}

footer.footer .rights{
    justify-content: center;
    font-family: var(--Josefin);
}
footer.footer .rights h4{
    color: white;
}

footer.footer .rights h4 a{
    color: var(--white);
}

footer.footer .move-up{
    position: absolute;
    right: 6%;
    top: 50%;
}

footer.footer .move-up span{
    color: var(--midnight);
}

footer.footer .move-up span:hover{
    color: var(--white);
    cursor: pointer;
}

@media only screen and (max-width: 750px){
   .navi .nav-menu, .navi .nav-items{
       flex-direction: column;
   } 
   .navi .toggle-collapse{
       display: initial;
   }
}
   </style> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<title>Adventure</title>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
</head>

<body>
<a href="logout.php">Logout</a>
<nav class="navi"> 
        
<div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text">Adventure</a>
            </div>
            <div>
                <div class="toggle-collapse">
                    <div class="toggle-icons">
                        <i class="fas fa-bars"></i>
                    </div>
                </div> 
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Category</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Gallery</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Pages</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
            <a href="https://web.facebook.com/Adventure-108249575014159" target="blank"><i class="fab fa-facebook-f"></i></a>
                 <a href="https://www.instagram.com/ad.venture603/" target="blank"><i class="fab fa-instagram"></i></a>
                 <a href="https://twitter.com/Tureadven3Ture"target="blank"><i class="fab fa-twitter"></i></a>
                 <a href="https://www.youtube.com/channel/UC1fecvzh2sJk13BXgQMr9Cg" target="blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

<!--Main-->
<main>
    <!--Title-->
    <section class="site-title">
        <div class="site-background">
            <h3>Tours & Travels</h3>
            <h1>Amazing Place on Earth</h1>
            <a href="#go"><button class="btn">Explore</button></a>
            
        </div>
    </section>

    
       <div class="tom">
           
           <h1>Welcome to our site</h1>
       </div>
   
   
   <section>
       <div id="go"><h2>Content</h2></div>
    <div class="blog">
        <div class="container">
           <!--<div class="owl-carousel owl-theme blog-post">--> 
                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                    <img src="./assets/Blog-post/post1.png" alt="post-1" height="250px" width="500px">
                    <div class="blog-title">
                        <h3>Choto Shona Mosque (Bengali: ছোট সোনা মসজিদ, Small Golden Mosque) is located in Chapai Nawabganj district of Bangladesh. The mosque is situated about 3 kilometres (1.9 mi) south of the Kotwali Gate and 0.5 kilometres (0.31 mi) to the south-east of the Mughal Tahakhana complex in the Firozpur Quarter.</h3>
                        <a href="blog1.html" target="blank"><button class="btn btn-blog">See more</button></a>
                        
                    </div>
                </div>
                <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                    <img src="./assets/Blog-post/post2.jpg" alt="post-1">
                    <div class="blog-title">
                        <h3>Somapura Mahavihara (Bengali: সোমপুর মহাবিহার, romanized: Shompur Môhabihar) in Paharpur, Badalgachhi, Naogaon, Bangladesh is among the best known viharas, monasteries, in the Indian Subcontinent and is one of the most important archaeological sites in the country. It is also one of the earliest sites of Bengal, where significant numbers of Hindu statues were found.</h3>
                        <a href="#"><button class="btn btn-blog">See more</button></a>
                        
                    </div>
                </div>
                <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                    <img src="./assets/Blog-post/post3.png" alt="post-1">
                    <div class="blog-title">
                        <h3>Puthia Rajbari is a palace in Puthia Upazila, in Bangladesh, built in 1895, for Rani Hemanta Kumari, it is an example of Indo-Saracenic Revival architecture. The palace is sited on the Rajshahi Natore highway 30 km from the east of the town and one km south from Rajshahi Natore highway.</h3>
                        <a href="#"><button class="btn btn-blog">See more</button></a>
                        
                    </div>
                </div>
                
                </div>
            </div>
            
        </section>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                    iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Adventure</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="./assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="./assets/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="./assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="./assets/instagram/thumb-card8.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2021 All rights reserved | made by
                <a href="#">Secret Six <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    
</main>

    <script src="./js/jquery3..min.js"></script>
    <script src="./js/main.js"></script>	
     
</body> 
</html>

	 