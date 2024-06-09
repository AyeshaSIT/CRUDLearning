    <!doctype html>
    <html lang="en">
    <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
    </head>

    <body>
    <header>
    <!-- place navbar here -->
    </header>
    <main>
    <form action="{{$url}}" method="POST">
        @csrf
    <div class="container">
    <h1 class="text-center">{{$title}}</h1>
    <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="helpId" value="{{$customer->customer_name}}" placeholder=""/>
    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="mb-3"> <label for="" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id=""  value="{{$customer->customer_email}}" aria-describedby="emailHelpId" placeholder=""/>
    <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="mb-3"> <label for="" class="form-label" >DOB</label>
    <input type="date" class="form-control"name="dob" value="{{$customer->customer_dob}}" id="">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Address</label>
    <input type="text" class="form-control" name="address"  value="{{$customer->customer_address}}" aria-describedby="helpId"  placeholder=""/>
    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" class="form-control" name="password"/>
    </div>
    <div class="mb-3">
<label for="" class="form-label">Confirm Password</label>
<input type="password" class="form-control" name="cpassword"/>
</div>

Gender&nbsp;<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="" value="M" {{$customer->customer_gender == "M" ? "checked": ""}}/>
    <label class="form-check-label" for="">Male</label>
 </div>
 <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="" value="F" {{$customer->customer_gender == "F" ? "checked": ""}}/>
    <label class="form-check-label" for="">Female</label>
 </div>
 <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="" value="O" {{$customer->customer_gender == "O" ? "checked": ""}}/>
    <label class="form-check-label" for="">Other</label>
 </div>
<div>
    <button type="submit" class="btn btn-primary"> Submit </button></div>
</div></form>


</main>
    <footer>
    <!-- place footer here -->
    </footer>

    </body>
    </html>
