<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<body>
    <div class="container mt-lg-3">
        <div class="col">
            <form method="post" action="{{ url('/orders') }}">
                @csrf
                <fieldset>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" placeholder="Enter price" name="price">
                    <small class="form-text text-muted">We'll never share your details with anyone else.</small>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Pay now</button>
                </fieldset>
                
              </form>
              <small class="form-text text-muted text-center">Created by Harshith VA</small>
        </div>
       
    </div>

</body>
</html>