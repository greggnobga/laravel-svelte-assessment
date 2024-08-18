@extends('layouts.default') @section('content')

<section class="sv-carousel"></section>

<section id="service" class="container service">
    <div class="service-title">
        <h1 class="animated-element" data-animation="animate-fade-in-up">Service</h1>
    </div>
    <div class="service-items">
        <div class="service-item">
            <img
                class="item-image animated-element"
                data-animation="animate-fade-in"
                src="public/images/service/service-desc-01.jpg"
                alt="Story Image" />
            <h3 class="item-title animated-element" data-animation="animate-fade-in-up">Story title</h3>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
            </p>
        </div>

        <div class="service-item">
            <img
                class="item-image animated-element"
                data-animation="animate-fade-in"
                src="public/images/service/service-desc-02.jpg"
                alt="Story Image" />
            <h3 class="item-title animated-element" data-animation="animate-fade-in-up">Story title</h3>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
            </p>
        </div>

        <div class="service-item">
            <img
                class="item-image animated-element"
                data-animation="animate-fade-in"
                src="public/images/service/service-desc-03.jpg"
                alt="Story Image" />
            <h3 class="item-title animated-element" data-animation="animate-fade-in-up">Story title</h3>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
            </p>
        </div>

        <div class="service-item">
            <img
                class="item-image animated-element"
                data-animation="animate-fade-in"
                src="public/images/service/service-desc-04.jpg"
                alt="Story Image" />
            <h3 class="item-title animated-element" data-animation="animate-fade-in-up">Story title</h3>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
            </p>
        </div>
    </div>
</section>

<section id="about" class="about">
    <h1 class="about-title animated-element" data-animation="animate-fade-in-up">About Us</h1>
    <p class="about-text animated-element" data-animation="animate-fade-in">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
        <br />
        Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
        <br />
        Nulla non lectus sed nisl molestie malesuada.
        <br />
        Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.
        <br />
        Integer tempor. Praesent vitae arcu tempor neque lacinia pretium.
        <br />
        Fusce consectetuer risus a nunc. Aliquam ornare wisi eu metus.
        <br />
        In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Duis risus.
        <br />
        Praesent id justo in neque elementum ultrices.
        <br />
        Nullam sit amet magna in magna gravida vehicula. Etiam dictum tincidunt diam.
        <br />
    </p>
</section>

<section id="news" class="container news">
    <h1 class="news-title animated-element" data-animation="animate-fade-in-up">News</h1>
    <div class="news-items">
        <div class="news-item">
            <button class="item-tag btn-pink animated-element" data-animation="animate-fade-in">Information</button>
            <p class="item-date animated-element" data-animation="animate-fade-in">2018.04.10</p>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Something news title is here, this is dummy text. Something news title is here, this is dummy text.
            </p>
        </div>
        <div class="news-item">
            <button class="item-tag btn-blue animated-element" data-animation="animate-fade-in">Information</button>
            <p class="item-date animated-element" data-animation="animate-fade-in">2018.04.10</p>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Something news title is here, this is dummy text. Something news title is here, this is dummy text.
            </p>
        </div>
        <div class="news-item">
            <button class="item-tag btn-pink">Information</button>
            <p class="item-date animated-element" data-animation="animate-fade-in">2018.04.10</p>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Something news title is here, this is dummy text. Something news title is here, this is dummy text.
            </p>
        </div>
        <div class="news-item">
            <button class="item-tag btn-blue animated-element" data-animation="animate-fade-in">Information</button>
            <p class="item-date animated-element" data-animation="animate-fade-in">2018.04.10</p>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Something news title is here, this is dummy text. Something news title is here, this is dummy text.
            </p>
        </div>
        <div class="news-item">
            <button class="item-tag btn-pink animated-element" data-animation="animate-fade-in">Information</button>
            <p class="item-date animated-element" data-animation="animate-fade-in">2018.04.10</p>
            <p class="item-text animated-element" data-animation="animate-fade-in">
                Something news title is here, this is dummy text. Something news title is here, this is dummy text.
            </p>
        </div>
    </div>
    <div class="news-list">
        <p class="list-outer animated-element" data-animation="animate-fade-in"><button class="btn-list" type="button">Show News List</button></p>
    </div>
</section>

<section id="contact" class="contact">
    <h1 class="contact-title animated-element" data-animation="animate-fade-in-up">Contact</h1>
    <div class="contact-map">
        <img class="map-image animated-element" data-animation="animate-fade-in" src="https://placehold.co/600x400" alt="Contact" />
    </div>
</section>

@endsection
