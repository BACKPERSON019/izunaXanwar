<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title" style="font-family: geneva">Promo</h4>
                </div>
            </div>
            @foreach ($posts->take(2) as $page)
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">
                                <div class="section-overlay"></div>
                                <a href="detail-page.html" class="custom-block-image-wrap">
                                    <img src="{{ asset('storage/' . $page->photo) }}"
                                        class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>

                            {{-- <div class="mt-2">
                                <a href="#" class="btn custom-btn">
                                    Lihat Promo
                                </a>
                            </div> --}}
                        </div>

                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small class="me-4">
                                    <i class="bi-clock-fill custom-icon"></i>
                                    50 Minutes ago
                                </small>

                                <small><span class="badge" style="font-family: Helvetica">New!!</span></small>
                            </div>

                            <h5 class="mb-2">
                                <a href="detail-page.html" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                                    {{ $page->title }}
                                </a>
                            </h5>

                            <div class="profile-block d-flex">
                                <img src="{{ asset('frontend/images/profile/user.png') }}"
                                    class="profile-block-image img-fluid" alt="">

                                <p>
                                    Farel
                                    <img src="{{ asset('frontend/') }}images/verified.png"
                                        class="verified-image img-fluid" alt="">
                                    <strong>Staff</strong>
                                </p>
                            </div>

                            <p class="mb-0">{{ $page->description }}</p>

                            <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                <a href="#" class="bi-cursor me-1">
                                    <span>120k</span>
                                </a>

                                <a href="#" class="bi-heart me-1">
                                    <span>42.5k</span>
                                </a>

                                <a href="#" class="bi-chat me-1">
                                    <span>11k</span>
                                </a>

                                <a href="#" class="bi-download">
                                    <span>50k</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-column ms-auto">
                            <a href="#" class="badge ms-auto">
                                <i class="bi-heart"></i>
                            </a>

                            <a href="#" class="badge ms-auto">
                                <i class="bi-bookmark"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
