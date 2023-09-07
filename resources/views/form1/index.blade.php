<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
        <h2>Form 1</h2>
        @if ($errors->any())

        @endif
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $e )
                    <li>{{$e}}</li>

                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <form class="group-control"   method="POST" action="{{route('form1Submit')}}">
            @csrf
            {{-- <div class="mb-3">
                <label for="">Name</label>
                <input class="form-control    "  type="text" name="name" id="" placeholder="username">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="">Name</label>
                <input class="form-control    @error('name')
                is-invalid @enderror"  type="text" name="name" id="" placeholder="username">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input class="form-control @error('email')
                is-invalid @enderror"   name="email" id="" placeholder="email">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Age</label>
                <input class="form-control  @error('age')
                is-invalid @enderror"  type="number" name="age" id="" placeholder="age">
                @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">City</label>
                <select name="city" class="form-control  @error('city')
                is-invalid @enderror" >
                    <option selected disabled value="">Select city</option>
                    <option value="">test 1</option>
                    <option value="">test 2</option>
                    <option value="">test 3</option>
                    <option value="">test 4</option>
                    <option value="">test 5</option>

                </select>
                @error('city')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-success btn-lg w-100" type="submit">Submit</button>
            </div>


        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(".alert").fadeTo(2000,500).slideUp(500,function(){
            $(".alert").slideUp(500);
        });
    </script>
</body>
</html>



