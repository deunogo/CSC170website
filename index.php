<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="sss/sss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Project 3 - Home</title>
</head>

<body>
    <?php include "inc/banner.php"; ?>

    <aside class = "slideshow">

        <div class="slider">
            <img src="images/1big.png" alt="Photo of Takashi Murakami">
            <img src="images/2big.png" alt="Photo of Jean-Michel Basquiat">
            <img src="images/3big.png" alt="Photo of Wes Anserson">
            <img src="images/4big.png" alt="Photo of Vincent Van Gogh">
        </div>

    </aside>

    <main>
        <article class="wrapper">
            
            <img class = "first-column lessen" src="images/happybig.svg" alt = "Smiley Face">
            <div class="title-description">Most creative people and their life story</div>
            <img class = "final-column lessen" src="images/happybig.svg" alt = "Smiley Face">
           

          <div class="first-2-column intro">
                <img class="scalabe" src="images/4.png" alt="Photo of Takashi Murakami">
                <h2>Takashi Murakami</h2>
                <p>Takashi Murakami is a Japanese contemporary artist. He works in fine arts media (such as painting and sculpture) as well as commercial media (such as fashion, merchandise, and animation) and is known for blurring the line between high and low arts. He coined the term "superflat", which describes both the aesthetic characteristics of the Japanese artistic tradition and the nature of postwar Japanese culture and society.</p>
                <a href="murakami.php">
                    <button data-hover="Murakami">
                        <div>Read more!</div>
                    </button>
                </a>
            </div>

            <div class="last-2-column intro">
                <img class="scalabe" src="images/1.png" alt="Photo of Jean-Michel Basquiat">
                <h2>Jean-Michel Basquiat</h2>
                <p>Jean-Michel Basquiat was an American artist of Haitian and Puerto Rican descent. Basquiat first achieved fame as part of SAMO, a graffiti duo who wrote enigmatic epigrams in the cultural hotbed of the Lower East Side of Manhattan during the late 1970s, where rap, punk, and street art coalesced into early hip-hop music culture. By the early 1980s, his neo-expressionist paintings were being exhibited over the world.</p>
                <a href="jean.php">
                    <button data-hover="Basquiat">
                        <div>Read more!</div>
                    </button>
                </a>
            </div>

            <div class="first-2-column intro">
                <img class="scalabe" src="images/2.png" alt="Photo of Wes Anserson">
                <h2>Wesley Wales Anderson</h2>
                <p>Wesley Wales Anderson (born May 1, 1969) is an American filmmaker. His films are known for their symmetry, eccentricity, and distinctive visual and narrative styles, and he is regarded by some critics as a modern-day example of the auteur. Three of his films – The Royal Tenenbaums, Moonrise Kingdom, and The Grand Budapest Hotel – appeared in BBC Culture's 2016 poll of the greatest films since 2000.</p>
                <a href="wes.php">
                    <button data-hover="Wes">
                        <div>Read more!</div>
                    </button>
                </a>
            </div>

            <div class="last-2-column intro">
                
                <img class="scalabe" src="images/3.png" alt="Photo of Vincent Van Gogh">
                <h2>Vincent Van Gogh</h2>
                <p>Vincent Willem van Gogh was a Dutch post-impressionist painter who posthumously became one of the most famous and influential figures in the history of Western art. In a decade, he created about 2,100 artworks, including around 860 oil paintings, most of which date from the last two years of his life. They include landscapes, still lifes, portraits and self-portraits, and are characterised by bold colours. </p>
                <a href="vincent.php">
                    <button data-hover="Vincent">
                        <div>Read more!</div>
                    </button>
                </a>
            </div>
        </article>
    </main>

    <footer class="general wrapper">

        <p>CSC 170 Webpage Design and Development</p>
        <p>Original content from other students
        <p>Designed and developed by <a href="https://www.instagram.com/deuonogo/" target="_blank"> ddang3</a>

    </footer>

    <?php include "inc/scripts.php"; ?>
    <script src="sss/sss.js"></script>
    <script>
        $('.slider').sss();
    </script>

    <script src="js/scripts.js"></script>

</body>