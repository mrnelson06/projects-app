@extends('layouts.app')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="text-uppercase">All of the projects!</h1>
        <p>Learning new skills, honing new ones, and breaking things really good. Here are the projects that I'm working on!</p>
        <p><a class="btn btn-primary btn-lg text-uppercase" href="http:www.morganrnelson.com" role="button">Morgan R. Nelson.com &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <!-- Project Block -->
        <div class="col-md-6">
            <h2>Morgan.MBA</h2>
            <p>I'm taking advantage of the new gTLDs just coming onto the internet. <a href="http://morgan.mba">Morgan.MBA</a> is an alternative homepage and project space for professionally related projects.</p>
            <p><a class="btn btn-default text-uppercase" href="http://morgan.mba" target="_blank" role="button">Visit Site &raquo;</a></p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                    -- Complete --
                </div>
            </div>
        </div>
        <!-- End of Project Block -->
        <!-- Project Block -->
        <div class="col-md-6">
            <h2>Party</h2>
            <p>Hosting parties with unquie food and drink offerings for friends is something I enjoy. To help make the menu easy to create and easy for guest to view. It's not an app, but a manual site with templates for quick spin ups.</p>
            <p><a class="btn btn-default text-uppercase" href="http://party.morganrnelson.com" target="_blank" role="button">View Site &raquo;</a></p>
            <div class="progress">
                <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    90%
                </div>
            </div>
            <p class="small">Javascript and additional pages as required.</p>
        </div>
        <!-- End of Project Block -->
    </div>
    <div class="row">
        <!-- Project Block -->
        <div class="col-md-6">
            <h2>Fitness</h2>
            <p>Since I was a teenager, I've wanted to work and improve on my body. After years of false starts and failed attemps, I'm working hard to transform my body and improve my health. Visit the site soon to see my fitness transformation.</p>
            <p><a class="btn btn-default text-uppercase" href="http://fitness.morganrnelson.com" target="_blank" role="button">View Site &raquo;</a></p>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                    5%
                </div>
            </div>
        </div>
        <!-- Project Block -->
        <!-- End of Project Block -->
        <div class="col-md-6">
            <h2>Invitaions</h2>
            <p>Piggybacking off the Party Menu site is an Inviations Apps. I want more control than something like Paperless Post, so I'm working to build a similar app, while developing my PHP skills.</p>
            <p><a class="btn btn-default text-uppercase" href="http://invitations.morganrnelson.com" target="_blank" role="button">View Site &raquo;</a></p>
            <div class="progress">
                <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                    10%
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Project Block -->
        <div class="col-md-6">
            <h2>Repository of Knowledge</h2>
            <p>The world of marketing and operations contain TONS of information. To keep me on top of my game and be a top tier resrouce for my employerrs, my Repository of Knowledge Wiki will be a digital brain dump.</p>
            <p><a class="btn btn-default text-uppercase" href="http://repository.morgan.mba" target="_blank" role="button">Visit Site &raquo;</a></p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="5" style="width: 5%;">
                    5%
                </div>
            </div>
        </div>
        <!-- End of Project Block -->
    </div>

    <hr>
    <h3><small>Attribution</small></h3>
    <p class="small">Favicons <a href='http://www.freepik.com/free-vector/rocket-launch-icon_764881.htm'>designed by Freepik</a></p>
    <hr>

    <footer>
        <div class="col-md-6 text-left hidden-xs hidden-sm hidden-md">
            <p>Copyright &copy; 2016 Morgan R. Nelson</p>
        </div>
        <div class="col-md-6 text-right hidden-xs hidden-sm hidden-md">
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/morgan.r.nelson" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                <li><a href="https://twitter.com/morgannelson" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li><a href="https://www.pinterest.com/morgannelson" target="_blank"><i class="fa fa-pinterest-square fa-2x"></i></a></li>
                <li><a href="https://www.instagram.com/mrnelson06" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                <li><a href="https://www.linkedin.com/in/morganrnelson" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            </ul>
        </div>


        <div class="col-md-6 text-center visible-xs-sm hidden-lg">
            <p>Copyright &copy; 2016 Morgan R. Nelson</p>
        </div>
        <div class="col-md-6 text-center visible-xs-sm hidden-lg">
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/morgan.r.nelson" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                <li><a href="https://twitter.com/morgannelson" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></i></a></li>
                <li><a href="https://www.pinterest.com/morgannelson" target="_blank"><i class="fa fa-pinterest-square fa-2x"></i></a></li>
                <li><a href="https://www.instagram.com/mrnelson06" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                <li><a href="https://www.linkedin.com/in/morganrnelson" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            </ul>
        </div>
    </footer>
</div> <!-- /container -->

@stop