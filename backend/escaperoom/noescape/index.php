<html>

<head>
    <title>NoEscape manager</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300|ZCOOL+XiaoWei" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: FloralWhite;
            font-family: 'ZCOOL XiaoWei', serif;
            
        }

        .box {
            width: 1290px;
            padding: 5px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 7px;
            margin-top: 15px;
            box-sizing: border-box;

        }      
        
        

        #mainscreen{
            width: 1280px;
            height: 1024px;

        }
        .card{
            transition: all .2s ease-in-out;
            margin-top:15px;
            font-size:1vw;
            -webkit-transition: .2s all;
        }
        .card:hover {
            
            transform: scale(1.1);
            -webkit-filter: brightness(50%);
            
        }
        
        a.custom-card,
        a.custom-card:hover {
            color: inherit;
        }
        
        .example::-webkit-scrollbar {
            display: none;
        }

    </style>
    <script type="text/javascript">

    </script>
</head>

<body>
    


<div class="container-fluid">
<h2 class="display-2 text-center" style="margin-bottom:10px;"> NoEscape </h2>
</div>

<div class="container-fluid" style="">
    <div class="row row-cols-1  row-cols-xl-3">
        <div class="col mb-4 ">
            <a href="kosmos" class="custom-card" target="_blank">
                <div class="card">
                    <img src="kosmos/kosmos.jpg" class="card-img-top" alt="..." style="height:auto;">
                    <div class="card-body">
                        <h1 class="card-title">Kosmos</h1>
                        <p class="card-text">Zarządzanie wyświetlaczem pokoju Kosmos</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-4">
            <div class="card">
                <a href="wyspa" class="custom-card" target="_blank">
                    <img src="wyspa/bg.jpg" class="card-img-top " alt="..." style="height:auto;" >
                    <div class="card-body">                
                        <h1 class="card-title">Wyspa</h1>
                        <p class="card-text" >Zarządzanie wyświetlaczem pokoju Wyspa</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <a href="cmentarz" class="custom-card" target="_blank">
                    <img src="cmentarz/cmentarz.jpg" class="card-img-top" alt="..." style="height:auto;">
                    <div class="card-body">                
                        <h1 class="card-title">Cmentarz</h1>
                        <p class="card-text">Zarządzanie wyświetlaczem pokoju Cmentarz</p>                  
                    </div>
                </a>
            </div>
        </div>
        
    </div>
</div>


</body>

<footer>
    <p>Autor: Kamil Pabin</p>
    <p><a href="mailto:kamilxpabin@gmail.com">kamilxpabin@gmail.com</a></p>
</footer>


</html>
