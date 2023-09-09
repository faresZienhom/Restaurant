@extends('front.layout.master')
@section('title',"Shop Page")

@section('content')



<main>
    <div
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>المتجر</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="/">الرئيسية</a> /
          <span class="text-gray">المتجر</span>
        </div>
      </div>
    </div>

    <div class="section-container d-block d-lg-flex gap-5 shop mt-5 pt-5">
      <div class="shop__filter mb-4">
        <div class="mb-4">
          <h6 class="shop__filter-title">بتدور علي ايه؟</h6>
          <form action="">
            <div class="filter__search position-relative">
              <input
                class="w-100 py-1 ps-2"
                type="text"
                placeholder="بتدور علي ايه؟"
              />
              <div
                class="filter__search-icon position-absolute h-100 top-0 end-0 p-2 d-flex justify-content-center align-items-center"
              >
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
          </form>
        </div>
        <div>
          <h6 class="shop__filter-title mb-3">التصنيف</h6>
          <form action="">
            <div class="filter__size">
              <div class="mb-3">
                <input type="checkbox" name="filter-size" id="english-book" />
                <label for="english-book">English Books</label>
              </div>
              <div class="mb-3">
                <input type="checkbox" name="filter-size" id="english-book" />
                <label for="english-book">كتب عربية - English Books</label>
              </div>
            </div>
            <div class="mb-3">
              <input type="submit" class="primary-button" value="ابحث" />
            </div>
          </form>
        </div>
      </div>
      <div class="shop__products w-100">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <p class="m-0">عرض 1 - 40 من أصل 144 نتيجة</p>
          <select
            class="shop__category border-0 border-bottom bg-transparent"
          >
            <option selected disabled>اختر الترتيب</option>
            <option value="">ترتيب حسب الشهرة</option>
            <option value="">ترتيب حسب الأحدث</option>
            <option value="">ترتيب حسب: الأدني سعرا للأعلي</option>
            <option value="">ترتيب حسب: الأعلي سعرا للأدني</option>
          </select>
        </div>
        <div class="row products__list">
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-1.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Flutter Apprentice
              </a>
            </div>
            <div class="product__author text-center">Mike Katz</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-2.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Modern Full-Stack Development
              </a>
            </div>
            <div class="product__author text-center">Frank Zammetti</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                450.00 جنيه
              </span>
              <span class="product__price"> 250.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-3.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                C# 10 in a Nutshell
              </a>
            </div>
            <div class="product__author text-center">Joseph Albahari</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                650.00 جنيه
              </span>
              <span class="product__price"> 450.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-4.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Algorithms عربي
              </a>
            </div>
            <div class="product__author text-center">Aditya Y. Bhargava</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                359.00 جنيه
              </span>
              <span class="product__price"> 249.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-5.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Head-First Design Patterns
              </a>
            </div>
            <div class="product__author text-center">
              Eric Freeman & Elisabeth Robson
            </div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-1.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Flutter Apprentice
              </a>
            </div>
            <div class="product__author text-center">Mike Katz</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-2.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Modern Full-Stack Development
              </a>
            </div>
            <div class="product__author text-center">Frank Zammetti</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                450.00 جنيه
              </span>
              <span class="product__price"> 250.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-3.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                C# 10 in a Nutshell
              </a>
            </div>
            <div class="product__author text-center">Joseph Albahari</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                650.00 جنيه
              </span>
              <span class="product__price"> 450.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-4.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Algorithms عربي
              </a>
            </div>
            <div class="product__author text-center">Aditya Y. Bhargava</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                359.00 جنيه
              </span>
              <span class="product__price"> 249.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-5.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Head-First Design Patterns
              </a>
            </div>
            <div class="product__author text-center">
              Eric Freeman & Elisabeth Robson
            </div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-1.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Flutter Apprentice
              </a>
            </div>
            <div class="product__author text-center">Mike Katz</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-2.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Modern Full-Stack Development
              </a>
            </div>
            <div class="product__author text-center">Frank Zammetti</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                450.00 جنيه
              </span>
              <span class="product__price"> 250.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-3.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                C# 10 in a Nutshell
              </a>
            </div>
            <div class="product__author text-center">Joseph Albahari</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                650.00 جنيه
              </span>
              <span class="product__price"> 450.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-4.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Algorithms عربي
              </a>
            </div>
            <div class="product__author text-center">Aditya Y. Bhargava</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                359.00 جنيه
              </span>
              <span class="product__price"> 249.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-5.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Head-First Design Patterns
              </a>
            </div>
            <div class="product__author text-center">
              Eric Freeman & Elisabeth Robson
            </div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-1.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Flutter Apprentice
              </a>
            </div>
            <div class="product__author text-center">Mike Katz</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-2.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Modern Full-Stack Development
              </a>
            </div>
            <div class="product__author text-center">Frank Zammetti</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                450.00 جنيه
              </span>
              <span class="product__price"> 250.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-3.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                C# 10 in a Nutshell
              </a>
            </div>
            <div class="product__author text-center">Joseph Albahari</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                650.00 جنيه
              </span>
              <span class="product__price"> 450.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-4.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Algorithms عربي
              </a>
            </div>
            <div class="product__author text-center">Aditya Y. Bhargava</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                359.00 جنيه
              </span>
              <span class="product__price"> 249.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-5.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Head-First Design Patterns
              </a>
            </div>
            <div class="product__author text-center">
              Eric Freeman & Elisabeth Robson
            </div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-1.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Flutter Apprentice
              </a>
            </div>
            <div class="product__author text-center">Mike Katz</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                550.00 جنيه
              </span>
              <span class="product__price"> 350.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-2.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Modern Full-Stack Development
              </a>
            </div>
            <div class="product__author text-center">Frank Zammetti</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                450.00 جنيه
              </span>
              <span class="product__price"> 250.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-3.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                C# 10 in a Nutshell
              </a>
            </div>
            <div class="product__author text-center">Joseph Albahari</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                650.00 جنيه
              </span>
              <span class="product__price"> 450.00 جنيه </span>
            </div>
          </div>
          <div class="products__item col-6 col-md-4 col-lg-3 mb-5">
            <div class="product__header mb-3">
              <a href="/singelproduct">
                <div class="product__img-cont">
                  <img
                    class="product__img w-100 h-100 object-fit-cover"
                    src="{{asset("front")}}/assets/images/product-4.webp"
                    data-id="white"
                  />
                </div>
              </a>
              <div
                class="product__sale position-absolute top-0 start-0 m-1 px-2 py-1 rounded-1 text-white"
              >
                وفر 10%
              </div>
              <div
                class="product__favourite position-absolute top-0 end-0 m-1 rounded-circle d-flex justify-content-center align-items-center bg-white"
              >
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
            <div class="product__title text-center">
              <a
                class="text-black text-decoration-none"
                href="/singelproduct"
              >
                Algorithms عربي
              </a>
            </div>
            <div class="product__author text-center">Aditya Y. Bhargava</div>
            <div
              class="product__price text-center d-flex gap-2 justify-content-center flex-wrap"
            >
              <span class="product__price product__price--old">
                359.00 جنيه
              </span>
              <span class="product__price"> 249.00 جنيه </span>
            </div>
          </div>
        </div>

        <div
          class="products__pagination mb-5 d-flex justify-content-center gap-2"
        >
          <span class="pagination__btn rounded-1 pagination__btn--next"
            ><i class="fa-solid fa-arrow-right-long"></i
          ></span>
          <span class="pagination__btn rounded-1 active">1</span>
          <span class="pagination__btn rounded-1">2</span>
          <span class="pagination__btn rounded-1">3</span>
          <span class="pagination__btn rounded-1">4</span>
          <span class="pagination__btn rounded-1 pagination__btn--prev"
            ><i class="fa-solid fa-arrow-left-long"></i
          ></span>
        </div>
      </div>
    </div>
  </main>

    @endsection
