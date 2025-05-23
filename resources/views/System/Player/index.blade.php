<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 profile contacts - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
            background:#DCDCDC;
            margin-top:20px;
        }
        .card-box {
            padding: 20px;
            border-radius: 3px;
            margin-bottom: 30px;
            background-color: #fff;
        }

        .social-links li a {
            border-radius: 50%;
            color: rgba(121, 121, 121, .8);
            display: inline-block;
            height: 30px;
            line-height: 27px;
            border: 2px solid rgba(121, 121, 121, .5);
            text-align: center;
            width: 30px
        }

        .social-links li a:hover {
            color: #797979;
            border: 2px solid #797979
        }
        .thumb-lg {
            height: 88px;
            width: 88px;
        }
        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 100%;
            height: auto;
        }
        .text-pink {
            color: #ff679b!important;
        }
        .btn-rounded {
            border-radius: 2em;
        }
        .text-muted {
            color: #98a6ad!important;
        }
        h4 {
            line-height: 22px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            @foreach($players as $player)
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>{{$player->name}}</h4>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Message Now</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>71</h4>
                                            <p class="mb-0 text-muted">Pontos (por jogo)</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>154</h4>
                                            <p class="mb-0 text-muted">Rebotes (por jogo)</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>325</h4>
                                            <p class="mb-0 text-muted">Jogos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            @endforeach

        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
