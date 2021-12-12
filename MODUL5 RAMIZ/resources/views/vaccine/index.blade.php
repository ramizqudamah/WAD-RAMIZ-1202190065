<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>MODUL5 RAMIZ</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class=" navbar-nav mx-auto ">
            <li class=" nav-item">
                <a class="nav-link active" href="/home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link active font-weight-bold" href="/vaccine">VACCINE</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link " href="/patient">PATIENT</a>
            </li>
        </ul>
    </nav>
    <!-- Navbar -->

    <!--data vaccine kosong -->
    @if($vaccine -> isEmpty())
    <div class="container d-flex justify-content-center p-5">
        <div class="row text-center p-5">
            <div class="col">
                <a>There is no data..</a>
            </div>
            <div class="w-100 p-3">
                <a class="btn btn-primary" href="{{ route('vaccine.create') }}" role="button">Add Vaccine</a>
            </div>
        </div>
    </div>
    <!---->

    <!--data vaccine ada -->
    @else
    <div class="container p-2">
        <h3 class="text-center p-5"> List Vaccine</h3>
        <a class="btn btn-primary" href="{{ route('vaccine.create') }}" role="button">Add Vaccine</a>
        <div class="py-3">
            <table class="table table-primary ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1 ?>
                    @foreach($vaccine as $vaccines)
                    <tr>
                        <th scope="row"><?php echo $x;
                                        $x++ ?></th>
                        <td>{{$vaccines->name}}</td>
                        <td>Rp {{$vaccines->price}}</td>
                        <td><a type="button" href="{{ route('vaccine.edit',$vaccines->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('vaccine.destroy',$vaccines->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <!---->

    <!-- Footer -->
    <footer>
        <div class="p-4 text-center fixed-bottom">
            <a type="button" href="" data-toggle="modal" data-target="#Modal" style="color: black;">
                Made with <i class="fas fa-heart " style="color:purple"></i>
                Ramiz Qudamah - 1202190065 </a>
        </div>
        <!-- Modal Footer-->
        <div class="modal fade" id="Modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Kesan : menambah pengetahuan pastinya untuk bekal didunia kerja nantinya</p>
                        <p>Pesan : semoga kedepannya modulnya dipadatkan agar waktu pengerjaan praktikum bisa lebih lama dan kalau bisa ada troubleshooting bersama asisten</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>