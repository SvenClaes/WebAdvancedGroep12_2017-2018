<header class="codeigniter">
    <div class="container text-center">
        <h1>Web Advanced PE</h1>
        <p class="lead">Joran - Sven - Thomas - Tibeau</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>CodeIgniter</h2>
                <p class="lead">Voor ons project hebben we gekozen voor CodeIgniter omdat dit een relatief klein Framework is waar toch alle functionaliteit in zit die we nodig zullen hebben.
                    De leercurve van CodeIgniter is ook veel makkelijker dan Laravel, waar we in eerste instantie voor gekozen hadden.
                    CodeIgniter is een opensource-framework ontworpen met het oog op snelheid en gebruiksgemak.</p>
            </div>
        </div>

    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Cross-Site Scripting</h2>
                <p>Dit is een fout in de beveiliging van een website doordat de invoer (zoals een cookie, een url of request parameters) niet juist wordt verwerkt en hierdoor in de uitvoer terechtkomt naar de eindgebruiker.
                    Via deze bug in de website kan er kwaadaardige code geïnjecteerd worden waardoor men misbruik kan maken van deze fout.</p>

                <p>Men kan onder meer sessiecookies worden bekeken, sessie van een gebruiker worden overgenomen, functionaliteit van een website worden verrijkt of onbedoelde acties voor een gebruiker worden uitgevoerd.
                    Je kan met CodeIgniter de webapplicaties beveilgen met behulp van de xss_clean methode. Deze zoekt naar veelgebruikte technieken die gebruikt worden om veiligheidslekken te vinden.</p>
            </div>
            <div class="col-lg-6">
                <h2>Cross-Site Request Forgery</h2>
                <p>Je kan Cross-Site Request Forgery tegenhouden door simpelweg CSRF protection te activeren in de config.php file van CodeIgniter.
                    Om CSRF te voorkomen moet je een manier hebben om ‘echte’ aanvragen en ‘vervalste’ (forged) aanvragen van elkaar te onderscheiden.</p>

                <p>Een veelgebruikte aanpak is om alle formulieren in je applicatie die een effect hebben, dus informatie wijzigen of verwijderen, te beschermen met een token.
                    Zo’n token is een geheime sleutel die alleen de server kan weten, en die elke keer als een formulier wordt meegestuurd. De token wordt aan het formulier meegegeven en meegestuurd met de aanvraag.
                    CodeIgniter werkt ook met tokens in hun formulieren.</p>
            </div>
            <div class="col-lg-6">
                <h2>SQL-Injection</h2>
                <p>Wanneer een gebruiker in een invoerveld tekens invoert die ervoor zorgen dat een ongewenste SQL-query wordt uitgevoerd doet deze aan SQL-Injection.
                    SQL-injection kan gebeuren als invoer van gebruikers op onvoldoende gecontroleerde wijze wordt verwerkt in een SQL-statement.</p>

                <p>De injectie met SQL-code kan eenvoudig tegengegaan worden door het juist verwerken van informatie die door een gebruiker wordt aangeleverd.
                    CodeIgniter gaat automatisch de input nakijken en zorgen dat "kwadaardige" code tegen gehouden zal worden.</p>
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container text-center">
        <h1>Team</h1>
        <br />
        <div class="row">
            <div class="col-lg-3">
                <img src="https://media-exp2.licdn.com/mpr/mpr/shrink_100_100/AAEAAQAAAAAAAAfjAAAAJDMyYWY0OGM5LTQ2MzAtNGU0ZS1hMjdmLTUyMmM4YTAyZjBjMQ.jpg" />
                <h2>Sven Claes</h2>
                <p class="lead">Respectvol - Analytisch - Spontaan</p>
            </div>
            <div class="col-lg-3">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAIAAgDGAAAAAQAAAAAAAAmRAAAAJDkyNWYyNTc3LTEzNjQtNGMyNC05YzBmLTJkYmRiZjcxMDY4OQ.jpg" />
                <h2>Tibeau Schodts</h2>
                <p class="lead">Initiatiefrijk</p>
            </div>
            <div class="col-lg-3">
                <img src="https://media-exp2.licdn.com/mpr/mpr/shrink_100_100/p/4/005/08e/279/2c265d6.jpg" />
                <h2>Thomas Philipsen</h2>
                <p class="lead">Werkpaard - Timide</p>
            </div>
            <div class="col-lg-3">
                <img src="https://media.licdn.com/dms/image/C4D03AQFKAIRhR8a1bQ/profile-displayphoto-shrink_100_100/0?e=1526263200&v=alpha&t=P7JhvM1uaimCLPPgWVSphG5XMC4tQGNxH5QSwrGjFdI" />
                <h2>Joran Dirkzwager</h2>
                <p class="lead">Leergierig - Luisterend oor - Geïnteresseerd</p>
            </div>
        </div>
    </div>
</section>

<section class="footer bg-dark">
    <p>Web Advanced 2018</p>
</section>

</body>
</html>
