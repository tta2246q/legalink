@extends('layouts.app')
@section('content')
<div class="head-gallery">
    <h1>Gallary</h1>
</div>
<div class="with-space">
    <div class="col-12">
        <div class="row-12">
            <div class="row-6">
                <div class="col text-center">
                    <h1>Gird Style</h1>
                    <p>with space</p>
                </div>
            </div>
            <div class="row-6">
                <img class="img-with-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134732.png"
                    alt="">
                <img class="img-with-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134752.png"
                    alt="">
                <img class="img-with-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134807.png"
                    alt="">
                <img class="img-with-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134827.png"
                    alt="">
            </div>
        </div>
    </div>
</div>
<div class="without-space">
    <div class="col-12">
        <div class="row-12">
            <div class="row-6">
                <div class="col text-center">
                    <h1>Gird Style</h1>
                    <p>without space</p>
                </div>
            </div>
            <div class="row-6">
                <img class="img-without-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134732.png"
                    alt="">
                <img class="img-without-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134752.png"
                    alt="">
                <img class="img-without-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134807.png"
                    alt="">
                <img class="img-without-space" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134827.png"
                    alt="">
            </div>
        </div>
    </div>
</div>
<div class="Horizontal.Scrolling">
    <div class="col-12">
        <div class="row-12">
            <div class="row-6">
                <div class="col text-center">
                    <h1>Horizontal Scrolling</h1>
                    <p>Howar With Carter Caption</p>
                </div>
            </div>
            <div class="row-6 scrollball">
                <img class="img-horizontal" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134732.png"
                    alt="">
                <img class="img-horizontal" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134752.png"
                    alt="">
                <img class="img-horizontal" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134807.png"
                    alt="">
                <img class="img-horizontal" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134827.png"
                    alt="">
            </div>
        </div>
    </div>
</div>
<div class="Gallery-Plain-Carousel">
    <div >
        <br>
        <h1>Gallery Plain Carousel</h1>
        <p>Howar With Carter Caption</p>
    </div>
    <div>
        <img src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 152920.png" alt="">
    </div>
</div>
<div class="Gallery-Vertical">
    <div class="col-12">
        <div class="row-2">
            <div class="col">
                <h3>Gallery Vertical</h3>
                <p>Caption</p>
            </div>
            <div class="col">
                <img class="img-gallery-vertical" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 152920.png" alt="">
            </div>
            <div class="col">
                <img class="img-gallery-vertical" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134752.png" alt="">
            </div>
            <div class="col">
                <img class="img-gallery-vertical" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134807.png" alt="">
            </div>
            <div class="col">
                <img class="img-gallery-vertical" src="\assets\wp-content\uploads\sites\6\images\Screenshot 2024-07-31 134827.png" alt="">
            </div>
        </div>
    </div>
    
@endsection