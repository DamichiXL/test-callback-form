<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Callback</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 mt-3">
                <div class="bg-light p-3 border border-secondary">
                    <form class="row g-3" id="callback-form" novalidate>
                        <div class="col-12">
                            <label for="firstname" class="form-label">First name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required autofocus>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="lastname" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="" required>
                            <div class="valid-feedback">
                                Correct!
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit" id="send-callback">Send</button>
                        </div>
                    </form>
                </div>
                <div class="alert alert-success" role="alert" id="success" style="display: none">
                    <h4 class="alert-heading">Congratulations!</h4>
                    <p>You successfully sended data.</p>
                    <hr>
                    <p class="mb-0">We will contact you shortly</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
