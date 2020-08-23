<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>QNEWS</title>
    <style>
        main {
    
            background: linear-gradient(#333230,#CCCCCC);
        }
        h2 ,p{
            color: white;
            font-weight:bold;
        }
        
        .CONTENT {
            background:black; 
            color: white;
        }
        
    </style>
    <link href="qnews.css" rel="stylesheet">


</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <header>
        <nav class="navbar navbar-dark bg-white container">
            <h1 class = "logo">
                <a href="http://localhost/Main.php?#"><img src="Qnews Logo.png" width="220" height="110"></img></a>
            </h1>
            <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <hr class="featurette-divider bg-dark">
                    <a class="nav-link bg-dark text-white" href="http://localhost/qnews.php?#" style="text-align:center">新聞快搜</a>
                    <hr class="featurette-divider bg-dark">
                </li>
 
                <li class="nav-item">
                    <a class="nav-link bg-dark text-white" href="http://localhost/statics.php?#" style="text-align:center">每周新聞趨勢圖表與分析</a>
                    <hr class="featurette-divider bg-dark">
                </li>

                <li class="nav-item">
                    <a class="nav-link bg-dark text-white" href="http://localhost/aboutus.php?#" style="text-align:center">關於我們</a>
                    <hr class="featurette-divider bg-dark">
                </li>
                </ul>
            
            </div>
        </nav> 
    </header>

    <main role="main">


        <div class="container">

            <!-- START THE FEATURETTES -->
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <a href="http://localhost/statics.php?#"><h2 class="featurette-heading">每周新聞趨勢圖表與分析</h2></a>
                    <p class="lead">透過每周報導的新聞進行相似度比對並分析出這周的那些主題較為熱門並提供給使用者</p>
                </div>
                <div class="col-md-5 order-md-1">
                    
                    <a href="http://localhost/statics.php?#"><img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="statistic.jpg" ></img></a>
                    
                </div>
            </div>

            
            
            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

    </main>
    <br>
    <div class="container">

        <div class="WRAPPER row">

            <div class = "SIDE col-md-3">
            
                    <!--單選框-->
                    <div id="box2">
                    <div>
                    <h4>版選擇</h4>
                        <label><input type="radio" name="fruit" value='0' checked="true">政治</label>
                        <label><input type="radio" name="fruit" value='1'>娛樂</label>
                        <label><input type="radio" name="fruit" value='2'>社會</label>
                        <label><input type="radio" name="fruit" value='3'>體育</label>
                    </div>
                    <button id="btn2">取消</button>
                    <button id="btn3">確定</button>
                    </div>
                    <br>
                    <h4>搜尋單一關鍵字統計圖</h4>
                    <div class="box3">
                    <div class="container-1">
                        <span class="icon"><i class="fa fa-search"></i></span>
                        <input type="search" id="search" placeholder="Search..." />
                    </div>
                    <br>
                    <h4>起始時間結束時間</h4>
                    </div>
                        <div class="box4">
                            <input id="date" type="date">
                    </div>
                    <br>
                    <div class="box5">
                            <input id="date" type="date">
                    </div>
                    <br>
            
            </div>
            <div class = "CONTENT col-md-9">
                
                <h1>統計與分析圖表放置處: 關鍵字</h1>
                <br>
                
            </div>
        </div>

    </div>
    <br>
    <br>
    <div class="container">

        <div class="WRAPPER row">

            
            <div class = "CONTENT col-md-12">
                
                <h1>新聞趨勢上升或下降</h1>
                <br>
                
            </div>
        </div>

    </div>
    </div>






</body>

</html>