@extends('layouts.user')
@section('content')

<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-11 pt-7 bg-600">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6 class="font-sans-serif text-primary fw-bold">Danh mục khóa học</h6>
                <h1 class="mb-6">Phát triển Website</h1>
                <form class="row g-3">
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputCategories">Danh mục</label>
                        <select class="form-select" id="inputCategories">
                            <option selected="selected">Phát triển Web</option>
                            <option value="1">Thiết kế UX/UI</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputLevel">Cấp bậc</label>
                        <select class="form-select" id="inputLevel">
                            <option selected="selected">Tất cả</option>
                            <option value="1">Cấp độ 1 </option>
                            <option value="2">Cấp độ 2 </option>
                            <option value="3">Cấp độ 3</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputLanguage">Ngôn ngữ</label>
                        <select class="form-select" id="inputLanguage">
                            <option selected="selected">Vietnamese</option>
                            <option value="1">English</option>
                            <option value="2">Bangla</option>
                            <option value="3">Hindi</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label" for="inputInstructor">Giảng Viên</label>
                        <select class="form-select" id="inputInstructor">
                            <option selected="selected">Tất cả giảng viên </option>
                        </select>
                    </div>
                    <div class="col-auto z-index-2">
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->




<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pb-0" style="margin-top:-17rem">

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/design.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Thiết kế hệ thống thông tin cho người mới
                            bắt đầu</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The
                            Museum of Modern Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/psychology.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Phật giáo và tâm lý học</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern
                            Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/philosophy.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Giới thiệu về triết học</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/photographs.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Nâng cao khả năng phân tích ảnh</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/arguments.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Làm sao để nhìn nhận vấn đề thực tiễn hơn
                        </h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of
                            Modern Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/experience-design.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Cách tạo thời gian biểu cho chính mình</h5>
                        <a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern
                            Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/user-design.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Viết lách như bậc thầy văn học</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern
                            Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/critical-thinking.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking
                        </h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke
                            University</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/art-design.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Nghệ thuật và Thiết kế đồ họa</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern
                            Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/user-research.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Nghệ thuật và Thiết kế đồ họa</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern
                            Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/photographs.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Nâng cao khả năng phân tích ảnh</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke University</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/ux.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Nghệ thuật và Thiết kế đồ họa</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern
                            Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/design.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Thiết kế hệ thống thông tin cho người mới
                            bắt đầu</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The
                            Museum of Modern Art</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/critical-thinking.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Introduction to Logic and Critical Thinking
                        </h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">Duke
                            University</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100"><img class="card-img-top w-100"
                        src="<?= pathAssets() ?>assets/img/gallery/art-design-1.png" alt="courses" />
                    <div class="card-body">
                        <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Nghệ thuật và Thiết kế đồ họa</h5><a
                            class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern
                            Art</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->
@endsection