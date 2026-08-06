<section id="blog" class="blog_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-4">
                <span class="subtitle">What I write</span>
                <h2>Feature Post</h2>
                <p>These are the feature post of my blog. See at a glance. To read more go to the see more option</p>
            </div>
        </div>
        <div class="row">
            @php
                $blogPosts = [
                    ['Natural beauty. which is grateful in Bangladesh.', '12th December, 2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, vitae culpa. Impedit beatae iusto ratione.'],
                    ['Natural beauty. which is grateful in Bangladesh.', '12th December, 2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, vitae culpa. Impedit beatae iusto ratione.'],
                    ['Natural beauty. which is grateful in Bangladesh.', '12th December, 2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, vitae culpa. Impedit beatae iusto ratione.'],
                    ['Natural beauty. which is grateful in Bangladesh.', '12th December, 2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, vitae culpa. Impedit beatae iusto ratione.'],
                    ['Natural beauty. which is grateful in Bangladesh.', '12th December, 2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, vitae culpa. Impedit beatae iusto ratione.'],
                    ['Natural beauty. which is grateful in Bangladesh.', '12th December, 2018', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, vitae culpa. Impedit beatae iusto ratione.']
                ];
            @endphp
            
            @foreach($blogPosts as $post)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card p-4">
                    <h3 class="mb-4">{{ $post[0] }}</h3>
                    <img src="{{ asset('images/Grey.png') }}" alt="">
                    <p class="date">{{ $post[1] }}</p>
                    <p>{{ $post[2] }}</p>
                    <a href="blog-post.html">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-sm-12 text-center mb-4">
                <button class="main-btn"><a href="all-post.html">Show More</a></button>
            </div>
        </div>
    </div>
</section>