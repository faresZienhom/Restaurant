@extends('front.layout.master')
@section('title',"Favourites")

@section('content')


<main>
    <div
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>المفضلة</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="/">الرئيسية</a> /
          <span class="text-gray">المفضلة</span>
        </div>
      </div>
    </div>

    <div class="my-5 py-5">
      <section class="section-container favourites">
        <table class="w-100">
          <thead>
            <th class="d-none d-md-table-cell"></th>
            <th class="d-none d-md-table-cell"></th>
            <th class="d-none d-md-table-cell">الاسم</th>
            <th class="d-none d-md-table-cell">السعر</th>
            <th class="d-none d-md-table-cell">تاريخ الاضافه</th>
            <th class="d-none d-md-table-cell">المخزون</th>
            <th class="d-table-cell d-md-none">product</th>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="d-block d-md-table-cell">
                <span class="favourites__remove m-auto">
                  <i class="fa-solid fa-xmark"></i>
                </span>
              </td>
              <td class="d-block d-md-table-cell favourites__img">
                <img src="{{asset("front")}}/assets/images/product-1.webp" alt="" />
              </td>
              <td class="d-block d-md-table-cell">
                <a href=""> Flutter Apprentice </a>
              </td>
              <td class="d-block d-md-table-cell">
                <span class="product__price product__price--old"
                  >550 جنية</span
                >
                <span class="product__price">350 جنية</span>
              </td>
              <td class="d-block d-md-table-cell">يوليو 24, 2023</td>
              <td class="d-block d-md-table-cell">
                <span class="me-2"><i class="fa-solid fa-check"></i></span>
                <span class="d-inline-block d-md-none d-lg-inline-block"
                  >متوفر بالمخزون</span
                >
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
  </main>

@endsection
