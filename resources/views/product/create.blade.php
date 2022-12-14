
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Hello World</h1>
        
        <div class="container">
            
            <form action="{{route('product.edit',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="sr-only" for="">label</label>
                    <input type="email" class="form-control" id="" placeholder="Input field">
                </div>
            
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="1" placeholder=""> An
                            <input type="radio" name="status" value="0" placeholder=""> hien thi              
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Anh</label>
                    <input type="email" class="form-control" name="upload" placeholder="Input field">
                </div>
            
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="email" class="form-control" name="price" placeholder="Input field">
                </div>
            
                <div class="form-group">
                    <label for="">sale_price</label>
                    <input type="email" class="form-control" name="sale_price" placeholder="Input field">
                </div>
            
                <div class="form-group">
                    
                    <select name="category_id" id="">
                        @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    
                </div>
           
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
        

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
