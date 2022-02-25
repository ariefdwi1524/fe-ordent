<?php
$data = file_get_contents('assets/data/articles.json');
$articles = json_decode($data, true);

// var_dump($articles);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ordent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container" >
        <div class="mt-5">
            <div class="card-body">
                <div class="row">

                    @php $no=0;@endphp
                    <?php foreach ($articles as $dt) : ?>
                

                    <div class="col-sm-4">
                        <div class="box boxshadow border">
                            <div>
                                <img src="<?= $dt['cover'] ?>" class="card-img-top border" alt="...">
                            </div>
                            <div>
                                <h2>
                                    <?= $dt['title'] ?>
                                </h2>
                                <h6>
                                    <?= $dt['summary'] ?>
                                </h6>
                            </div>
                            
                            <div class="col-sm-6 pad" id="{{$no}}"> 
                                <a href="">
                                    <?= $dt['ads'] ?>
                                </a>
                            </div>
                            <div class="col-sm-6 pad"> 
                                <i class='bx bx-share-alt'></i>
                                <i class='bx bx-bookmark'></i>
                                <i class='bx bx-heart'></i>
                                <h4 class="right">
                                    <?= $dt['likes'] ?>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </div>


</body>
</html>