@extends('user.navtop')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <h2 class="koleksi-buku-text">
        FREQUENTLY
        <span class="teks-ungu">ASKED QUESTIONS</span>
    </h2>

    <div id="pertanyaans">
        {{-- <div class="display-flex-between pertanyaans">
            <h4>Apa itu Kejaksaan Tinggi Jawa Tengah?</h4>
            <div class="material-symbols-outlined">add</div>
        </div>
        <div class="display-flex-between pertanyaans">
            <h4>Apa itu Kejaksaan Tinggi Jawa Tengah?</h4>
            <div class="material-symbols-outlined">add</div>
        </div>
        <div class="display-flex-between pertanyaans">
            <h4>Apa itu Kejaksaan Tinggi Jawa Tengah?</h4>
            <div class="material-symbols-outlined">add</div>
        </div>
        <div class="display-flex-between pertanyaans">
            <h4>Apa itu Kejaksaan Tinggi Jawa Tengah?</h4>
            <div class="material-symbols-outlined">add</div>
        </div> --}}
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default variables. It's also worth noting that just about any
                        HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
