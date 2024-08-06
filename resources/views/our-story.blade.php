@extends('layout.web')
@section('title', 'Our Story')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner4.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Our Story</h1>
                        <ul>
                            <li>
                                <a href="{{ route('web.home') }}">Home</a>
                            </li>
                            <li>Our Story</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-page-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('shared.sidemenu-about')
                </div>
                <div class="col-lg-9">
                    <div class="about-us-taps-details-wrap">
                        <div class="about-tabs-body">
                            <h2>Our Story</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore obcaecati deserunt
                                distinctio neque quas, quasi illum temporibus, dolorem nobis officia repellat explicabo
                                laborum molestiae repellendus amet magni officiis praesentium soluta exercitationem. Sed
                                ipsa repellat similique repellendus animi? Tenetur, sed? Quos vitae culpa ducimus enim,
                                possimus eligendi quod minima eum quibusdam?</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur natus nemo quae voluptate
                                est repudiandae laboriosam dolor deserunt iure a asperiores deleniti alias incidunt totam
                                atque distinctio ratione hic voluptates veniam consectetur, unde ab, mollitia tempore.
                                Iusto, sint accusamus aspernatur perspiciatis velit consequatur saepe rerum voluptates
                                obcaecati in odit quod quaerat sapiente nesciunt suscipit temporibus totam alias delectus ab
                                minima itaque tenetur recusandae praesentium officiis! Temporibus facere libero illum
                                mollitia quis doloremque et cumque amet corrupti nesciunt ea quo dolor officia, architecto
                                impedit nobis veniam atque odio fugit quod! Beatae voluptatibus natus, voluptas ducimus
                                architecto eius reiciendis est adipisci omnis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, dolorem cupiditate rerum
                                culpa, consequuntur sit blanditiis nobis alias aperiam sapiente magnam tenetur sunt ducimus
                                eligendi numquam deleniti officiis asperiores dolorum assumenda placeat ipsum praesentium!
                                Placeat provident optio dolores, in aliquid tenetur consequuntur at magni maiores?
                                Reiciendis cumque animi quam quisquam omnis accusantium, qui tempora, libero doloribus
                                repellendus, asperiores quas sapiente.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat impedit ad nihil
                                blanditiis esse sapiente porro ducimus sunt officia possimus ipsum, totam exercitationem!
                                Magnam sapiente cupiditate corrupti officiis ut at?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
