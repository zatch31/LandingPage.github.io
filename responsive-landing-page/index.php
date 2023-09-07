<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>landing page </title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
                        </li>
                        
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!-------------------HOME------------------>
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div>
                        <img src="assets/img/home.png" alt="" class="home__img">
                    </div>
                    
                    <div class="home__data">
                        <div class="home__header">
                            <h1 class="home__title">On</h1>
                            <h2 class="home__subtitle">Beats</h2>
                        </div>

                        <div class="home__footer">
                            <h3 class="home__title-description">Overview</h3>
                            <p class="home__description">Enjoy Beats sound with wireless listening freedom and a sleek, 
                                streamlined design with comfortable padded earphones, delivering first-rate playback.
                            </p>
                            <a href="#" class="button button--flex">
                                <span class="button--flex">
                                    <i class="ri-shopping-bag-line button__icon"></i></i> Add to Bag
                                </span>
                                <span class="home__price">$99</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            

            <!-------------------------PRODUCTS-------------------->
            <section class="products section" id="products">
                <h2 class="section__title section__title-gradient products__line">
                    Choose <br> Your Vibe
                </h2>

                <div class="products__container container grid">
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/product1.png" alt="" class="products__img">
    
                            <h3 class="products__title">Black</h3>
                            <span class="products__price">$49</span>
    
                            <button class="button button--flex products__button">
                                <i class="ri-shopping-bag-line button__icon"></i>
                            </button>
                        </div>
                    </article>
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/product2.png" alt="" class="products__img">
    
                            <h3 class="products__title">Red Black</h3>
                            <span class="products__price">$29</span>
    
                            <button class="button button--flex products__button">
                                <i class="ri-shopping-bag-line button__icon"></i>
                            </button>
                        </div>
                    </article>
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/product1.png" alt="" class="products__img">
    
                            <h3 class="products__title"> Black</h3>
                            <span class="products__price">$92</span>
    
                            <button class="button button--flex products__button">
                                <i class="ri-shopping-bag-line button__icon"></i>
                            </button>
                        </div>
                    </article>
                    

                
                </div>
            </section>
            <section>
                <div class="contact" id="contact">
                    <h2 >Contact Us</h2>
                    <form action="index.php" method="POST">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </section>
            <section id="thank-you" class="hidden">
        <h2>Thank you for contacting us!</h2>
        <p>We will get back to you as soon as possible.</p>
    </section>
        </main>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        echo "<section id='thank-you' class='thank-you-message'>";
        echo "<h2>Thank you for contacting us, $name!</h2>";
        echo "<p>We will get back to you as soon as possible.</p>";
        echo "</section>";
    }
    ?>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>