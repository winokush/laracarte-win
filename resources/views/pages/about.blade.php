@extends('layouts.default', ['title' => 'About'])


@section('content')

    <div class="container">
        <h2>What is {{ config('app.name') }}?</h2>
        <p>{{ config('app.name') }} is a clone app of <a href="https://laramap.com">Laramap.com.</a></p>

        <div class="row">
            <div class="col-sm-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i> This app has been built by <a href="https://web.facebook.com/?_rdc=1&_rdr">wino kush</a> for learning purposes.</strong>
                </p>
            </div>
        </div>
        <p>Feel free to help to improve the <a href="https://github.com/winokush/laracarte-win" target="_blank">source code</a>.</p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>{{ config('app.name') }} is the website by which Laracate was inspired :).</p>
        <p>More info <a href="https://laramap.com/p/about">here</a>.</p>

        <hr>

        <h2>Which tools and services are used in {{ config('app.name') }}?</h2>
        <p>Basically it's built on laravel &amp; Bootstrap. But there's a
        bunch of services used for email and other session.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocalisation Packages</li>
            <li>Michel Fortin's Markdown Parser Packages</li>
            <li>Heroku</li>
        </ul>
    </div>
@stop