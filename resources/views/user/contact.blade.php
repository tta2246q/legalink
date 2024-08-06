@extends('layouts.app')
@section('content')
    <div class="head-contact">
        <h1 style="font-size: 70px">Contact Us</h1>
        <p>Get intouch</p>
    </div>
    <div class="col-12 contact-information">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="row">
                    <div class="col-4">
                        <br>
                        <div class="row-4"><i class="fa-solid fa-phone fa-2xl"></i></div>
                        <br> br
                        <div class="row-3">
                            <h2>Phone</h2>
                        </div>
                        <p>A wonderful serenity has taken possession of my <br> entire soul, like these</p>
                        <a class="link" href="">+1-2345-2345</a>
                    </div>
                    <div class="col-4">
                        <br>
                        <div class="row-4"><i class="fa-regular fa-envelope fa-2xl"></i></div>
                        <br>
                        <div class="row-3">
                            <h2>Email</h2>
                        </div>
                        <p>A wonderful serenity has taken possession of my <br> entire soul, like these</p>
                        <a class="link" href="">Contact@goodlayers.com</a>
                    </div>
                    <div class="col-4">
                        <br>
                        <div class="row-4"><i class="fa-solid fa-location-arrow fa-2xl"></i></div>
                        <br>
                        <div class="row-3">
                            <h2>Location</h2>
                        </div>
                        <p>4 apt. Flawing Street. The Grand Avenue <br>livepool, UK 33342</p>
                        <a class="link" href="">View On Google Map</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-2"></div>
    </div>
    <div style="text-align: center; margin-top:50px">
        <div style="margin-bottom: 50px">
            <h1>Leave us your info </h1>
            <p>and we will get back to you.</p>
        </div>
        <div>
            <input class="input" type="text" placeholder="Full Name*"> <br>
            <input class="input" type="text" placeholder="Email*"><br>
            <input class="input" type="text" placeholder="Subject*"><br>
            <form action="#" method="post">
                <textarea placeholder=" Message*" required cols="73" rows="5"></textarea>
            </form>
            <button class="submit-now" style="margin-top: 20px; margin-bottom: 70px" type="submit">SUBMIT NOM</button>
        </div>
    </div>
    <div class="icon-contact">
        <br>
        <i style="margin-top: 10px" class="fa-regular fa-envelope fa-lg"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-skype"></i>
        <i class="fa-brands fa-twitter"></i>
    </div>
@endsection
