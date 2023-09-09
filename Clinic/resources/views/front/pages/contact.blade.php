@extends("front.layout.master")
@section('title' , 'ContactUs')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="../views/index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        
        <form class="form"    action= "<?php $_SERVER['PHP_SELF'];?>"    method="POST">
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" name = "name" id="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" name = "phone" id="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" name = "email" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="subject">subject</label>
                    <input type="text" class="form-control" name = "subject" id="subject" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="message">message</label>
                    <textarea class="form-control" id="message" name = "message" required></textarea>
                </div>
            </div>
            
            <div class="form-group p-2 my-1">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            </div>
        </form>
    </div>

</div>

@endsection