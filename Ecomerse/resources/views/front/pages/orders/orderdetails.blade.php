@extends('front.layout.master')
@section('title',"Orders Details")

@section('content')

<main>
    <div
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>تتبع طلبك</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="/">الرئيسية</a> /
          <span class="text-gray">تتبع طلبك</span>
        </div>
      </div>
    </div>

    <section class="section-container my-5 py-5">
      <p>
        تم تقديم الطلب #79917 في يوليو 26, 2023 وهو الآن بحالة قيد التنفيذ.
      </p>

      <section>
        <h2>تفاصيل الطلب</h2>
        <table class="success__table w-100 mb-5">
          <thead>
            <tr class="border-0 bg-danger text-white">
              <th>المنتج</th>
              <th class="d-none d-md-table-cell">الإجمالي</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div>
                  <a href="">كوتش فلات ديزارت -رجالى - الابيض, 42</a> x 1
                </div>
                <div>
                  <span class="fw-bold">اللون:</span>
                  <span>لابيض</span>
                </div>
                <div>
                  <span class="fw-bold">المقاس:</span>
                  <span>42</span>
                </div>
              </td>
              <td>200.00 جنيه</td>
            </tr>
            <tr>
              <td>
                <div><a href="">كوتش كاجوال -رجالى - بنى, 43</a> x 1</div>
                <div>
                  <span class="fw-bold">اللون:</span>
                  <span>بني</span>
                </div>
                <div>
                  <span class="fw-bold">المقاس:</span>
                  <span>43</span>
                </div>
              </td>
              <td>150.00 جنيه</td>
            </tr>
            <tr>
              <th>المجموع:</th>
              <td class="fw-bolder">350.00 جنيه</td>
            </tr>
            <tr>
              <th>الإجمالي:</th>
              <td class="fw-bold">389.00 جنيه</td>
            </tr>
          </tbody>
        </table>
      </section>
      <section class="mb-5">
        <h2>عنوان الفاتورة</h2>
        <div class="border p-3 rounded-3">
          <p class="mb-1">محمد محسن</p>
          <p class="mb-1">43 الاتحاد</p>
          <p class="mb-1">القاهرة</p>
          <p class="mb-1">01020288964</p>
          <p class="mb-1">moamenyt@gmail.com</p>
        </div>
      </section>
    </section>
  </main>


@endsection
