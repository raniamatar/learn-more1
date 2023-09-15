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
        <h2>Form 2</h2>
         @include('parts.errors')

        <form enctype="multipart/form-data"    class="group-control"   method="POST" action="{{route('form2Submit')}}">
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
                <label for="">Image</label>
                <input class="form-control @error('image')
                is-invalid @enderror"  type="file" name="image"  >
                @error('image')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Album</label>
                <input class="form-control @error('album')
                is-invalid @enderror"  type="file"  multiple name="album[]"  >
                @error('album')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>


            <div class="mt-3">
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



