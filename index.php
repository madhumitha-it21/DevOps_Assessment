<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>




/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
/*===== VARIABLES CSS =====*/
:root{
  --header-height: 3rem;
  --font-semi: 600;
}


:root{
  --first-color: #ac3dec;
  --second-color: #0E2431;
}


:root{
  --body-font: 'Poppins', sans-serif;
  --big-font-size: 2rem;
  --h2-font-size: 1.25rem;
  --normal-font-size: 0.938rem;
}
@media screen and (min-width: 768px){
  :root{
    --big-font-size: 3.5rem;
    --h2-font-size: 2rem;
    --normal-font-size: 1rem;
  }
}


:root{
  --mb-1: 0.5rem;
  --mb-2: 1rem;
  --mb-3: 1.5rem;
  --mb-4: 2rem;
  --mb-5: 2.5rem;
  --mb-6: 3rem;
}


:root{
  --z-back: -10;
  --z-normal: 1;
  --z-tooltip: 10;
  --z-fixed: 100;
}




*,::before,::after{
  box-sizing: border-box;
}
html{
  scroll-behavior: smooth;
}
body{
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  color: var(--second-color);
}
h1,h2,p{
  margin: 0;
}
ul{
  margin: 0;
  padding: 0;
  list-style: none;
}
a{
  text-decoration: none;
}
img{
  max-width: 100%;
  height: auto;
  display: block;
}


.section-title{
  position: relative;
  font-size: var(--h2-font-size);
  color: var(--first-color);
  margin-top: var(--mb-2);
  margin-bottom: var(--mb-4);
  text-align: center;
}
.section-title::after{
  position: absolute;
  content: "";
  width: 64px;
  height: 0.18rem;
  left: 0;
  right: 0;
  margin: auto;
  top: 2rem;
  background-color: var(--first-color);
}
.section{
  padding-top: 3rem;
  padding-bottom: 2rem;
}


.bd-grid{
  max-width: 1024px;
  display: grid;
  grid-template-columns: 100%;
  grid-column-gap: 2rem;
  width: calc(100% - 2rem);
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}
.l-header{
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
  background-color: #fff;
  box-shadow: 0 1px 4px rgba(146,161,176,.15);
}




.nav{
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: var(--font-semi);
}
@media screen and (max-width: 768px){
  .nav__menu{
    position: fixed;
    top: var(--header-height);
    right: -100%;
    width: 80%;
    height: 100%;
    padding: 2rem;
    background-color: var(--second-color);
    transition: .5s;
  }
}
.nav__item{
  margin-bottom: var(--mb-4);
}
.nav__link{
  position: relative;
  color: #fff;
}
.nav__link:hover{
  position: relative;
}
.nav__link:hover::after{
  position: absolute;
  content: "";
  width: 100%;
  height: 0.18rem;
  left: 0;
  top: 2rem;
  background-color: var(--first-color);
}
.nav__logo{
  color: var(--second-color);
}
.nav__toggle{
  color: var(--second-color);
  font-size: 1.5rem;
  cursor: pointer;
}


.active::after{
  position: absolute;
  content: "";
  width: 100%;
  height: 0.18rem;
  left: 0;
  top: 2rem;
  background-color: var(--first-color);
}




.show{
  right: 0;
}




.home{
  height: calc(100vh - 3rem);
  row-gap: 1rem;
}
.home__data{
  align-self: center;
}
.home__title{
  font-size: var(--big-font-size);
  margin-bottom: var(--mb-5);
}
.home__title-color{
  color: var(--first-color);
}
.home__social{
  display: flex;
  flex-direction: column;
}
.home__social-icon{
  width: max-content;
  margin-bottom: var(--mb-2);
  font-size: 1.5rem;
  color: var(--second-color);
}
.home__social-icon:hover{
  color: var(--first-color);
}
.home__img{
  position: absolute;
  right: 0;
  bottom: 0;
  width: 295px;
}




.button{
  display: inline-block;
  background-color: var(--first-color);
  color: #fff;
  padding: .75rem 2.5rem;
  font-weight: var(--font-semi);
  border-radius: .5rem;
}
.button:hover{
  box-shadow: 0 10px 36px rgba(0,0,0,.15);
}




.about__container{
  row-gap: 2rem;
  text-align: center;
}
.about__subtitle{
  margin-bottom: var(--mb-2);
}
.about__img{
  justify-self: center;
}
.about__img img{
  width: 200px;
  border-radius: .5rem;
}




.skills__container{
  row-gap: 2rem;
  text-align: center;
}
.skills__subtitle{
  margin-bottom: var(--mb-2);
}
.skills__text{
  margin-bottom: var(--mb-4);
}
.skills__data{
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  font-weight: var(--font-semi);
  padding: .5rem 1rem;
  margin-bottom: var(--mb-4);
  border-radius: .5rem;
  box-shadow: 0 4px 25px rgba(14,36,49,.15);
}
.skills__icon{
  font-size: 2rem;
  margin-right: var(--mb-2);
  color: var(--first-color);
}
.skills__names{
  display: flex;
  align-items: center;
}
.skills__bar{
  position: absolute;
  left: 0;
  bottom: 0;
  background-color: var(--first-color);
  height: .25rem;
  border-radius: .5rem;
  z-index: var(--z-back);
}
.skills__html{
  width: 95%;
}
.skills__css{
  width: 85%;
}
.skills__js{
  width: 65%;
}
.skills__ux{
  width: 75%;
}
.skills__img{
  border-radius: .5rem;
}


.work__container{
  row-gap: 2rem;
}
.work__img{
  box-shadow: 0 4px 25px rgba(14,36,49,.15);
  border-radius: .5rem;
  overflow: hidden;
}
.work__img img{
  transition: 1s;
  cursor: pointer;
}
.work__img img:hover{
  transform: scale(1.1);
}


.projects__container{
  row-gap: 2rem;
}
.projects__img{
  box-shadow: 0 4px 25px rgba(14,36,49,.15);
  border-radius: .5rem;
  overflow: hidden;
}
.projects__img img{
  transition: 1s;
  cursor: pointer;
}
.projects__img img:hover{
  transform: scale(1.1);
}



.contact__input{
  width: 100%;
  font-size: var(--normal-font-size);
  font-weight: var(--font-semi);
  padding: 1rem;
  border-radius: .5rem;
  border: 1.5px solid var(--second-color);
  outline: none;
  margin-bottom: var(--mb-4);
}
.contact__button{
  display: block;
  border: none;
  outline: none;
  font-size: var(--normal-font-size);
  cursor: pointer;
  margin-left: auto;
}




.footer{
  background-color: var(--second-color);
  color: #fff;
  text-align: center;
  font-weight: var(--font-semi);
  padding: 2rem 0;
}
.footer__title{
  font-size: 2rem;
  margin-bottom: var(--mb-4);
}
.footer__social{
  margin-bottom: var(--mb-4);
}
.footer__icon{
  font-size: 1.5rem;
  color: #fff;
  margin: 0 var(--mb-2)
}




@media screen and (min-width: 768px){
  body{
    margin: 0;
  }
  .section{
    padding-top: 4rem;
    padding-bottom: 3rem;
  }
  .section-title{
    margin-bottom: var(--mb-6);
  }
  .section-title::after{
    width: 80px;
    top: 3rem;
  }


  .nav{
    height: calc(var(--header-height) + 1rem);
  }
  .nav__list{
    display: flex;
    padding-top: 0;
  }
  .nav__item{
    margin-left: var(--mb-6);
    margin-bottom: 0;
  }
  .nav__toggle{
    display: none;
  }
  .nav__link{
    color: var(--second-color);
  }


  .home{
    height: 100vh;
  }
  .home__data{
    align-self: flex-end;
  }
  .home__social{
    padding-top: 0;
    padding-bottom: 2.5rem;
    flex-direction: row;
    align-self: flex-end;
  }
  .home__social-icon{
    margin-bottom: 0;
    margin-right: var(--mb-4);
  }
  .home__img{
    width: 457px;
    bottom: 15%;
  }


  .about__container, .skills__container{
    grid-template-columns: repeat(2,1fr);
    align-items: center;
    text-align: initial;
  }
  .about__img img{
    width: 300px;
  }
  .work__container{
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2,1fr);
    column-gap: 2rem;
  }
  
  .projects__container{
    width: 300px;
  }

  .contact__form{
    width: 360px;
  }
  .contact__container{
    justify-items: center;
  }
}


@media screen and (min-width: 1024px) {
  .bd-grid {
    margin-left: auto;
    margin-right: auto;
  }
  .home__img {
    right: 10%;
  }
}



  

</style>
</head>
<body>


         <!-- HEADER -->
         <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Madhumitha Sundarakrishnan</a>
                </div>


                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#projects" class="nav__link">projects</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>


                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>


        <main class="l-main">
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">MADHUMITHA SUNDARAKRISHNAN</span><br> Web Developer</h1>


                    <a href="#" class="button">Contact</a>
                </div>


                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>


                <div class="home__img">    
                    <img src="img/profile1.png" alt="">
                </div>
            </section>


            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>


                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="img/about.png" alt="">
                    </div>
                   
                    <div>
                        <h2 class="about__subtitle">I'am Madhumitha Sundarakrishnan</h2>
                        <p class="about__text">A Curious Learner and a Student who is Pursuing a Undergraduate degree - Btech Information Technology.


                            I'm Passionate in the Domain of Programmer in Full Stack Development and Software Development.
                           
                            I'm An Hardworking Graduate with a Theoretical and Practical Knowledge in C, C++, Java, HTML, CSS, VB.Net, Data Structures, Software Development Life Cycle(SDLC).
                           
                            Now, Currently Learning Python</p>          
                    </div>                                  
                </div>
            </section>


            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>


                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text"></p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">


                            </div>
                            <div>
                                <span class="skills__percentage">90%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                               
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                               
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__ux">
                               
                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                    </div>
                   
                    <div>              
                        <img src="img/skills1.png" alt="" class="skills__img">
                    </div>
                </div>
            </section>


            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>


                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="img/1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="img/6.jpg" alt="">
                    </div>
                </div>
            </section>


            <section class="projects section " id="about">
                <h2 class="section-title">Projects</h2>


                <div class="projects__container bd-grid">
                    <div class="about__img">
                        <img src="img/project.png" alt="">
                    </div>
                   <center><a href="h.html">Click here</a><center>
                    <div>
                        <h2 class="projects__subtitle">Take a Trip</h2>
                        <p class="about__text">A tourism or travel website serves as an information 
                            hub for prospective travelers planning a getaway. 
                            Today, people travel for a range of experiences—babymoons, 
                            staycations, voluntourism or bleisure—you name it. So, provide as much 
                            relevant information as possible to help users plan their trips.</p>          
                    </div>                                  
                </div>
            </section>

            


       


        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Web Developer</p>
            <div class="footer__social">
                
            </div>
       
        </footer><br>


<center><h1> For More Details </h1></center>

<center><h2>contact form </h2></center>
<form method="post" action="register.php">
 
  <center><div class="user-box">
    <i class="fa fa-user icon"></i>
    <input class="input-field" name="firstname" id="firstname"placeholder="firstname" >
  </div>

  <div class="user-box">
    <i class="fa fa-user icon"></i>
    <input class="input-field" name="lastname" id="lastname"placeholder="lastname" >
  </div>
 
  <div class="password">
    <i class="fa fa-key icon"></i>
    <input class="pass-word" type="password" name="password" id="password"placeholder="Password" >
  </div>


  <div class="user-box">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="user-box">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="contact" name="contact">
  </div>

  <div class="user-box">
    <i class="fa fa-calendar"></i>
    <input class="calender" type="date" placeholder="datetime" name="datetime">
  </div>

  <button type="submit" value="Register"></center>
</form>


</body>
</html>

