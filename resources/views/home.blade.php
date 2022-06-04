<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <title>Toys</title>
</head>

<body>
    <header>

        <div class="header-contacts">
            <div class="container-content">
                <nav class="nav-contacts">
                    <ul class="group-contacts">
                        <li>Call Us: <a href="tel:+12139745898">+1 213 974-5898`</a></li>
                        <li>E-mail: <a href="mailto:toystore@template.com">toystore@template.com</a></li>
                    </ul>

                    <ul class="group-social">
                        <li><a class="social-icon twitter-icon" href="#"></a></li>
                        <li><a class="social-icon facebook-icon" href="#"></a></li>
                        <li><a class="social-icon instagram-icon" href="#"></a></li>
                        <li><a class="social-icon pinterest-icon" href="#"></a></li>
                        <li><a class="social-icon youtube-icon" href="#"></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="container-content">
            <nav class="nav-main">
                <a class="nav-item-logo" href="#">ToyStore</a>

                <ul class="nav-main-list">
                    <li class="nav-main-item"><a href="#">Catalog</a></li>
                    <li class="nav-main-item"><a href="#">Delivery</a></li>
                    <li class="nav-main-item"><a href="#">About</a></li>
                    <li class="nav-main-item"><a href="#">Contacts</a></li>
                    <li class="nav-main-item nav-item-cart"><a href="#">Cart<span class="cart-icon"></span><span
                                class="cart-badge">2</span></span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="welcome-section">
        <div class="greetings">
            <p>Say Hello to ToyStore!</p>
            <p class="greetings-text">Free Ecommerce</p>
            <p class="greetings-text">Template for Webflow</p>
            <a class="greetings-button" href="#">Open catalog</a>
        </div>
    </div>

    <div class="toys-category container-content">
        <section class="toys-category-card card-left">
            <img src="images/bear.png" alt="Soft toy">
            <div class="card-side">
                <h2>Stuffed Animals</h2>
                <a href="#">Shop now</a>
            </div>
        </section>

        <section class="toys-category-card card-right">
            <img src="images/spinner.png" alt="Wooden toy">
            <div class="card-side">
                <h2>Wooden toys</h2>
                <a href="#">Shop now</a>
            </div>
        </section>
    </div>

    <div class="container-content toys-carousel-container">
        <div class="toys-carousel-header">
            <h2>Stuffed animals</h2>
            <a href="#">See all toys</a>
        </div>

        <div class="toys-carousel-slider">

        </div>

        <div class="toys-carousel">
            <section class="toys-carousel-card">
                <h2>Teddy bear</h2>
                <img src="images/bear.png" alt="Teddy bear">
                <a href="#">$ 30.00 USD</a>
            </section>

            <section class="toys-carousel-card">
                <h2>Mega plush toy</h2>
                <img src="images/plush.jpg" alt="Mega plush toy">
                <a href="#">$ 38.00 USD</a>
            </section>

            <section class="toys-carousel-card">
                <h2>Cute dog</h2>
                <img src="images/dog.jpg" alt="Cute dog">
                <a href="#">$ 24.00 USD</a>
            </section>

            <section class="toys-carousel-card">
                <h2>Little friend</h2>
                <img src="images/friend.jpg" alt="Little friend">
                <a href="#">$ 27.00 USD</a>
            </section>
        </div>
    </div>

    <div class="container-content toys-carousel-container">
        <div class="toys-carousel-header">
            <h2>Wooden toys</h2>
            <a href="#">See all toys</a>
        </div>

        <div class="toys-carousel-slider">

        </div>

        <div class="toys-carousel">
            <section class="toys-carousel-card">
                <h2>Happy flower</h2>
                <img src="images/flower.jpg" alt="Happy flower">
                <a href="#">$ 38.00 USD</a>
            </section>

            <section class="toys-carousel-card">
                <h2>Lift machine</h2>
                <img src="images/machine.jpg" alt="Left machine">
                <a href="#">$ 24.00 USD</a>
            </section>

            <section class="toys-carousel-card">
                <h2>Wooden camera</h2>
                <img src="images/camera.jpg" alt="Wooden camera">
                <a href="#">$ 32.00 USD</a>
            </section>

            <section class="toys-carousel-card">
                <h2>Little rabbit</h2>
                <img src="images/rabbit.jpg" alt="Little rabbit">
                <a href="#">$ 16.00 USD</a>
            </section>
        </div>
    </div>

    <section class="our-story-container">
        <div class="our-story">
            <h2>Watch our story</h2>
            <h3>About the shop</h3>
            <p>There is no magic formula to write perfect ad copy. It is based on a number of factors, including ad
                placement, demographic, even the consumer’s mood.</p>
            
            <a href="#"></a>
        </div>
    </section>

</body>

</html>