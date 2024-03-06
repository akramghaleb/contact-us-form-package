<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/contacts/contact-1/assets/css/contact-1.css" />
</head>
<body>
    <section class="bg-light py-3 py-md-5">
        <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h2 class="mb-4 display-5 text-center">Contact</h2>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
        </div>

        <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
            <div class="bg-white border rounded shadow-sm overflow-hidden">


                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif
                        <div class="col-12">
                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="" required>
                        </div>
                        <div class="col-12 col-md-6">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" value="" required>
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                        <label for="phone" class="form-label">Subject <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="tel" class="form-control" id="subject" name="subject" value="" required>
                        </div>
                        </div>
                        <div class="col-12">
                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="col-12">
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                        </div>
                        </div>
                    </div>
                </form>

            </div>
            </div>
        </div>
        </div>
    </section>
</body>
</html>
