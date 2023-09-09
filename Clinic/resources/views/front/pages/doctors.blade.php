@extends("front.layout.master")
@section('title' , 'Doctors')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{asset("front")}}/index.html"
                    index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">doctors</li>
        </ol>
    </nav>
    <div
        class="filteration d-flex gap-3 mb-3 flex-wrap justify-content-center justify-content-lg-start justify-content-md-start">
        <div class="dropdown">
            <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                governorate
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cairo</a></li>
                <li><a class="dropdown-item" href="#">Alexandria</a></li>
                <li><a class="dropdown-item" href="#">Giza</a></li>
                <li><a class="dropdown-item" href="#">Shubra El-Kheima</a></li>
                <li><a class="dropdown-item" href="#">Port Said</a></li>
                <li><a class="dropdown-item" href="#">Suez</a></li>
                <li><a class="dropdown-item" href="#">Luxor</a></li>
                <li><a class="dropdown-item" href="#">Asyut</a></li>
                <li><a class="dropdown-item" href="#">Ismailia</a></li>
                <li><a class="dropdown-item" href="#">Fayoum</a></li>
                <li><a class="dropdown-item" href="#">Zagazig</a></li>
                <li><a class="dropdown-item" href="#">Aswan</a></li>
                <li><a class="dropdown-item" href="#">Damietta</a></li>
                <li><a class="dropdown-item" href="#">Damanhur</a></li>
                <li><a class="dropdown-item" href="#">Minya</a></li>
                <li><a class="dropdown-item" href="#">Beni Suef</a></li>
                <li><a class="dropdown-item" href="#">Qena</a></li>
                <li><a class="dropdown-item" href="#">Sohag</a></li>
                <li><a class="dropdown-item" href="#">Hurghada</a></li>
                <li><a class="dropdown-item" href="#">6th of October</a></li>
                <li><a class="dropdown-item" href="#">Shibin El Kom</a></li>
                <li><a class="dropdown-item" href="#">Banha</a></li>
                <li><a class="dropdown-item" href="#">Kafr el-Sheikh</a></li>
                <li><a class="dropdown-item" href="#">Arish</a></li>
                <li><a class="dropdown-item" href="#">Mallawi</a></li>
                <li><a class="dropdown-item" href="#">10th of Ramadan</a></li>
                <li><a class="dropdown-item" href="#">Bilbais</a></li>
                <li><a class="dropdown-item" href="#">Marsa Matruh</a></li>
                <li><a class="dropdown-item" href="#">Idfu</a></li>
                <li><a class="dropdown-item" href="#">Mit Ghamr</a></li>
                <li><a class="dropdown-item" href="#">Al-Hamidiyya</a></li>
                <li><a class="dropdown-item" href="#">Desouk</a></li>
                <li><a class="dropdown-item" href="#">Qalyub</a></li>
                <li><a class="dropdown-item" href="#">Abu Kabir</a></li>
                <li><a class="dropdown-item" href="#">Kafr el-Dawwar</a></li>
                <li><a class="dropdown-item" href="#">Girga</a></li>
                <li><a class="dropdown-item" href="#">Akhmim</a></li>
                <li><a class="dropdown-item" href="#">Matareya</a></li>
                <li><a class="dropdown-item" href="#">Qutur</a></li>
                <li><a class="dropdown-item" href="#">New Cairo</a></li>
                <li><a class="dropdown-item" href="#">Siwa Oasis</a></li>
                <li><a class="dropdown-item" href="#">Hurghada</a></li>
                <li><a class="dropdown-item" href="#">El Alamein</a></li>
                <li><a class="dropdown-item" href="#">Ras El Bar</a></li>
                <li><a class="dropdown-item" href="#">Rafah</a></li>
                <li><a class="dropdown-item" href="#">Dahab</a></li>
                <li><a class="dropdown-item" href="#">Nuweiba</a></li>
                <li><a class="dropdown-item" href="#">Saint Catherine</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                city
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cairo</a></li>
                <li><a class="dropdown-item" href="#">Alexandria</a></li>
                <li><a class="dropdown-item" href="#">Giza</a></li>
                <li><a class="dropdown-item" href="#">Shubra El-Kheima</a></li>
                <li><a class="dropdown-item" href="#">Port Said</a></li>
                <li><a class="dropdown-item" href="#">Suez</a></li>
                <li><a class="dropdown-item" href="#">Luxor</a></li>
                <li><a class="dropdown-item" href="#">Asyut</a></li>
                <li><a class="dropdown-item" href="#">Ismailia</a></li>
                <li><a class="dropdown-item" href="#">Fayoum</a></li>
                <li><a class="dropdown-item" href="#">Zagazig</a></li>
                <li><a class="dropdown-item" href="#">Aswan</a></li>
                <li><a class="dropdown-item" href="#">Damietta</a></li>
                <li><a class="dropdown-item" href="#">Damanhur</a></li>
                <li><a class="dropdown-item" href="#">Minya</a></li>
                <li><a class="dropdown-item" href="#">Beni Suef</a></li>
                <li><a class="dropdown-item" href="#">Qena</a></li>
                <li><a class="dropdown-item" href="#">Sohag</a></li>
                <li><a class="dropdown-item" href="#">Hurghada</a></li>
                <li><a class="dropdown-item" href="#">6th of October</a></li>
                <li><a class="dropdown-item" href="#">Shibin El Kom</a></li>
                <li><a class="dropdown-item" href="#">Banha</a></li>
                <li><a class="dropdown-item" href="#">Kafr el-Sheikh</a></li>
                <li><a class="dropdown-item" href="#">Arish</a></li>
                <li><a class="dropdown-item" href="#">Mallawi</a></li>
                <li><a class="dropdown-item" href="#">10th of Ramadan</a></li>
                <li><a class="dropdown-item" href="#">Bilbais</a></li>
                <li><a class="dropdown-item" href="#">Marsa Matruh</a></li>
                <li><a class="dropdown-item" href="#">Idfu</a></li>
                <li><a class="dropdown-item" href="#">Mit Ghamr</a></li>
                <li><a class="dropdown-item" href="#">Al-Hamidiyya</a></li>
                <li><a class="dropdown-item" href="#">Desouk</a></li>
                <li><a class="dropdown-item" href="#">Qalyub</a></li>
                <li><a class="dropdown-item" href="#">Abu Kabir</a></li>
                <li><a class="dropdown-item" href="#">Kafr el-Dawwar</a></li>
                <li><a class="dropdown-item" href="#">Girga</a></li>
                <li><a class="dropdown-item" href="#">Akhmim</a></li>
                <li><a class="dropdown-item" href="#">Matareya</a></li>
                <li><a class="dropdown-item" href="#">Qutur</a></li>
                <li><a class="dropdown-item" href="#">New Cairo</a></li>
                <li><a class="dropdown-item" href="#">Siwa Oasis</a></li>
                <li><a class="dropdown-item" href="#">Hurghada</a></li>
                <li><a class="dropdown-item" href="#">El Alamein</a></li>
                <li><a class="dropdown-item" href="#">Ras El Bar</a></li>
                <li><a class="dropdown-item" href="#">Rafah</a></li>
                <li><a class="dropdown-item" href="#">Dahab</a></li>
                <li><a class="dropdown-item" href="#">Nuweiba</a></li>
                <li><a class="dropdown-item" href="#">Saint Catherine</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                major
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
    <div class="doctors-grid">
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>
        <div class="card p-2" style="width: 18rem;">
            <img src="{{asset("front")}}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                <h6 class="card-title fw-bold text-center">Major</h6>
                <a href="./doctor.html" doctor.html" class="btn btn-outline-primary card-button">Book an
                    appointment</a>
            </div>
        </div>


    </div>
    <nav class="mt-5" aria-label="navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link page-prev" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                        < </span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link page-next" href="#" aria-label="Next">
                    <span aria-hidden="true"> > </span>
                </a>
            </li>
        </ul>
    </nav>
</div>

</div>
@endsection