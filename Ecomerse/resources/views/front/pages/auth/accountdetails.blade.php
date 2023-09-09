@extends('front.layout.master')
@section('title',"Account")

@section('content')

<main>
    <section
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>حسابي</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="/">الرئيسية</a> /
          <span class="text-gray">حسابي</span>
        </div>
      </div>
    </section>

    <section
      class="section-container profile my-3 my-md-5 py-5 d-md-flex gap-5"
    >
      <div class="profile__right">
        <div class="profile__user mb-3 d-flex gap-3 align-items-center">
          <div class="profile__user-img rounded-circle overflow-hidden">
            <img class="w-100" src="assets/images/user.png" alt="" />
          </div>
          <div class="profile__user-name">moamenyt</div>
        </div>
        <ul class="profile__tabs list-unstyled ps-3">
          <li class="profile__tab">
            <a
              class="py-2 px-3 text-black text-decoration-none"
              href="/profile"
              >لوحة التحكم</a
            >
          </li>
          <li class="profile__tab">
            <a
              class="py-2 px-3 text-black text-decoration-none"
              href="/orders"
              >الطلبات</a
            >
          </li>

          <li class="profile__tab active">
            <a
              class="py-2 px-3 text-black text-decoration-none"
              href="/accountdetails"
              >تفاصيل الحساب</a
            >
          </li>
          <li class="profile__tab">
            <a
              class="py-2 px-3 text-black text-decoration-none"
              href="/favourites"
              >المفضلة</a
            >
          </li>
          <li class="profile__tab">
            <a class="py-2 px-3 text-black text-decoration-none" href=""
              >تسجيل الخروج</a
            >
          </li>
        </ul>
      </div>
      <div class="profile__left mt-4 mt-md-0 w-100">
        <div class="profile__tab-content active">
          <form class="profile__form border p-3" action="">
            <div class="d-flex gap-3 mb-3">
              <div class="w-100">
                <label class="fw-bold mb-2" for="first-name">
                  الاسم الاول <span class="required">*</span>
                </label>
                <input type="text" class="form__input" id="first-name" />
              </div>
              <div class="w-100">
                <label class="fw-bold mb-2" for="last-name">
                  الاسم الأخير <span class="required">*</span>
                </label>
                <input type="text" class="form__input" id="last-name" />
              </div>
            </div>
            <div class="w-100">
              <label class="fw-bold mb-2" for="displayed-name">
                أسم العرض<span class="required">*</span>
              </label>
              <input type="text" class="form__input" id="displayed-name" />
            </div>
            <div class="w-100 mb-3">
              <label class="fw-bold mb-2" for="email">
                البريد الالكتروني<span class="required">*</span>
              </label>
              <input type="text" class="form__input" id="email" />
            </div>
            <button class="primary-button">تعديل</button>
          </form>
          <form>
            <fieldset>
              <legend class="fw-bolder">تغيير كلمة المرور</legend>
              <div class="w-100 mb-3">
                <label class="fw-bold mb-2" for="curr-password">
                  كلمة المرور الحالية (اترك الحقل فارغاً إذا كنت لا تودّ
                  تغييرها)
                </label>
                <input type="text" class="form__input" id="curr-password" />
              </div>
              <div class="w-100 mb-3">
                <label class="fw-bold mb-2" for="curr-password">
                  كلمة المرور الجديدة (اترك الحقل فارغاً إذا كنت لا تودّ
                  تغييرها)
                </label>
                <input type="text" class="form__input" id="curr-password" />
              </div>
              <div class="w-100 mb-3">
                <label class="fw-bold mb-2" for="curr-password">
                  تأكيد كلمة المرور الجديدة
                </label>
                <input type="text" class="form__input" id="curr-password" />
              </div>
              <button class="primary-button">تغيير كلمة المرور</button>
            </fieldset>
          </form>
        </div>
      </div>
    </section>
  </main>


@endsection
